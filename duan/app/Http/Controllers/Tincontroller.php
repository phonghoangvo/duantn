<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\Tintuc;
use App\Models\Yeuthich;
use App\Models\Cuahang;
use App\Models\Product;
use App\Models\Comment;
use App\Models\Category;
use App\Models\pro_cate;
use App\Models\nhaxuatban;
use App\Models\tacgia;
Paginator::useBootstrap();

use Illuminate\Http\Request;

class Tincontroller extends Controller
{
    function index()
    {
        $giamgia = DB::table('product')
            ->where('giamgia', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->take(6)
            ->get();

        $hot = DB::table('product')
            ->where('hot', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->take(6)
            ->get();

        $danhchoban= DB::table('product')
        ->where('hidden', 1)
        ->orderBy(DB::raw('CAST(luotxem AS SIGNED)'), 'desc')
        ->take(6)
        ->get();

        $yeuthich= DB::table('product')
        ->where('hidden', 1)
        ->orderBy(DB::raw('CAST(yeuthich AS SIGNED)'), 'desc')
        ->take(6)
        ->get();

        $danhmucsach = DB::table('category')
            ->select('id', 'name')
            ->orderByRaw('CAST(thutu AS SIGNED) ASC')
            ->where('hidden', '=', '1')
            ->get();


        $nhaxuatban = DB::table('nhaxuatban')
            ->select('name','img')
            ->get();

        return view('index', [
            'giamgia' => $giamgia,
            'hot' => $hot,
            'danhmucsach' => $danhmucsach,
            'nhaxuatban' => $nhaxuatban,
            'danhchoban' => $danhchoban,
            'yeuthich' => $yeuthich,
        ]);
    }


    public function cuahang($id = null)
{
    $perpage = 24;

    // Initialize the query builder
    $query = Product::query();

    // Initialize $selectedCategory
    $selectedCategory = null;

    // Check if $id is provided, then filter by it
    if ($id !== null) {
        // Lọc sản phẩm theo danh mục trong bảng pro_cate
        $query->whereHas('proCates', function ($q) use ($id, &$selectedCategory) {
            $q->where('idCategory', $id);
            $selectedCategory = Category::find($id); // Gán giá trị cho $selectedCategory
        });
    }

    // Lọc theo giá
    $minPrice = request()->query('min_price');
    $maxPrice = request()->query('max_price');
    if ($minPrice !== null && $maxPrice !== null) {
        $query->whereBetween('priceSale', [$minPrice, $maxPrice]);
    }

    // Lọc theo tên
    $productName = request()->query('product_name');
    if ($productName !== null) {
        $query->where('name', 'like', '%' . $productName . '%');
    }

    $products = $query->paginate($perpage)->appends(request()->query());

    // Trả về view 'cuahang.blade.php' với dữ liệu sản phẩm và $selectedCategory
    return view('cuahang', ['products' => $products, 'selectedCategory' => $selectedCategory]);
}

public function filterProducts(Request $request)
{
    $minPrice = $request->input('minPrice');
    $maxPrice = $request->input('maxPrice');
    $sortType = $request->input('sortType');

    // Thực hiện lọc và sắp xếp theo giá
    $filteredProducts = Product::whereBetween('priceSale', [$minPrice, $maxPrice]);

    if ($sortType == 'giatangdan') {
        $filteredProducts->orderBy('priceSale');
    } elseif ($sortType == 'giagiamdan') {
        $filteredProducts->orderByDesc('priceSale');
    } elseif ($sortType == 'tuadenz') {
        $filteredProducts->orderBy('name');
    } elseif ($sortType == 'tuzdena') {
        $filteredProducts->orderByDesc('name');
    }

    $filteredProducts = $filteredProducts->paginate(12);

    return view('filtered', compact('filteredProducts'));
}

    
public function timkiem(Request $request)
{
    $searchTerm = $request->input('timkiem');
    $page = 24;

    $products = Product::with('categories')
        ->where('name', 'like', '%' . $searchTerm . '%')
        ->orWhereHas('categories', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%');
        })
        ->paginate($page);

    return view('cuahang', ['products' => $products]);
}

   
    //chitietsanpham
    public function chitiet($id){ 
        $hot = DB::table('product')
            ->where('hot', 1)
            ->where('hidden', 1)
            ->orderBy('ngayDang', 'desc')
            ->limit(7)
            ->get();
        $products = Product::where('id','=',$id)->get();
        $comment = Comment::where('idProduct',$products[0]->id)->orderBy('id','DESC')->get();
        $tg = Product::where('id','=',$id)->get();
        foreach ($products as $key => $value) {
            $idCategory = $value->idCategory;
        }
        $yeuthich = Product::where('id', '=', $id)->get();
        $sanphamlienquan = DB::table('pro_cate')
            ->where('idCategory',$idCategory)
            ->limit(6)
            // ->join('product', 'pro_cate.idProduct', '=', 'product.id')
            ->get();

        return view('chitiet',compact('products','hot','comment','yeuthich','tg'))
        ->with('sanphamlienquan',$sanphamlienquan);
    }
    public function favorite($idProduct){
        $data = [
            'idProduct' =>  $idProduct,
            'idUser' => auth()->id()
        ];
        $yeuthich = Yeuthich::where(['idProduct' => $idProduct,'idUser'=> auth()->id()])->first();
        if($yeuthich){
            
            $yeuthich->delete();
            return redirect()->back()->with('ok','Bạn đã bỏ yêu thích sản phẩm'); 
             
        }else{
            Yeuthich::create($data);
            return redirect()->back()->with('ok','Bạn đã yêu thích sản phẩm');  
        }
    }
    public function post_comment($proId){
        $data = request()->all('content');
        $data['idProduct'] = $proId;
        $data['idUser'] = auth()->id();
        if(comment::create($data)){
            return redirect()->back()->with('success','Bình luận đã được gửi');
        }
        return redirect()->back()->with('error', 'Bình luận chua được gửi');
    }

    //Tintuc
    public function news()
        {
            $news = Tintuc::where('hidden', 1)
                        ->orderBy('created_at', 'desc')
                        ->paginate(8);

            return view('news', ['news' => $news]);
        }

    function chitietnew($id){
        $chitietnew = Tintuc::find($id);
        return view('chitietnew',['chitietnew'=>$chitietnew]);
    }
    public function listtintuc() {
        $listtintuc = Tintuc::orderBy('created_at', 'desc')
                            ->paginate(5);
    
        return view('admin.listtintuc', compact('listtintuc'));
    }
    
    

   

    function themtin() {
        return view('admin.tin.themtin');
    }

    function themtin_(Request $request) {
        $imgPath = $request->file('img')->store('img', 'public');
        $t = new Tintuc;
        $t->title = $request->input('title');
        $t->img = '/storage/' . $imgPath;
        $t->summary = $request->input('summary');
        $t->content = $request->input('content');
        $t->hidden = $request->input('visibility',1);
        $t->save();
    
        return redirect()->route('listtintuc')-> with('success','Tin tức đã được thêm thành công');
    }
    

    function xoa($id) {
        $t = Tintuc::find($id);
        $t->delete();
        return redirect()->route('listtintuc');
    }

    function suatin($id) {
        $tintuc = Tintuc::find($id);
        return view("admin.tin.suatin", compact('tintuc'));
    }    

    public function capnhat(Request $request, $id) {
        $tintuc = Tintuc::find($id);
    
        // Kiểm tra xem người dùng đã tải lên ảnh mới hay chưa
        if ($request->hasFile('img')) {
            // Nếu có ảnh mới, lưu và cập nhật đường dẫn hình ảnh
            $imgPath = $request->file('img')->store('img', 'public');
            $tintuc->img = '/storage/' . $imgPath;
        }
    
        // Cập nhật các trường khác
        $tintuc->title = $request->input('title');
        $tintuc->summary = $request->input('summary');
        $tintuc->content = $request->input('content');
        $tintuc->hidden = $request->input('visibility', 1);
    
        // Lưu các thay đổi
        $tintuc->save();
    
        // Chuyển hướng về trang danh sách tin tức
        return redirect()->route('listtintuc')-> with('success','Tin tức đã được cập nhật thành công');
    }
    
    function lienhe() {
        return view('lienhe');
    }

    function gioithieu() {
        return view('gioithieu');
    }
}
