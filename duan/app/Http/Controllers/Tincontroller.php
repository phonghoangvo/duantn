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
Paginator::useBootstrap();

use Illuminate\Http\Request;

class Tincontroller extends Controller
{
    function index()
    {
        $giamgia = DB::table('product')
            // ->where('giamgia', 1)
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
            ->orderby('thutu', 'asc')
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
        $danhmucsach = null;

        // Kiểm tra xem có $id được truyền vào hay không
        if ($id !== null) {
            // Nếu có $id được truyền vào, thực hiện tìm kiếm theo thể loại
            $products = Cuahang::where('id', $id)->paginate($perpage)->withQueryString();
        } else {
            // Ngược lại, hiển thị tất cả sản phẩm
            $products = Cuahang::paginate($perpage)->withQueryString();
        }

        // Lấy danh mục sách từ tất cả sản phẩm (lấy một lần, không cần lặp)
        $idCategories = $products->pluck('id')->unique()->toArray();

    //     // Lọc và sắp xếp theo
    //     $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'none';

    //     switch ($sort_by) {
    //         case 'giagiamdan':
    //             $products = Cuahang::with('category')->whereIn('id', $idCategories)->orderBy('price', 'DESC')->paginate($perpage)->appends(request()->query());
    //             break;
    //         case 'giatangdan':
    //             $products = Cuahang::with('category')->whereIn('id', $idCategories)->orderBy('price', 'ASC')->paginate($perpage)->appends(request()->query());
    //             break;
    //         case 'tuadenz':
    //             $products = Cuahang::with('category')->whereIn('id', $idCategories)->orderBy('name', 'DESC')->paginate($perpage)->appends(request()->query());
    //             break;
    //         case 'tuzdena':
    //             $products = Cuahang::with('category')->whereIn('id', $idCategories)->orderBy('name', 'ASC')->paginate($perpage)->appends(request()->query());
    //             break;
    //         default:
    //             // Mặc định sắp xếp theo id giảm dần
    //             $products = Cuahang::with('category')->whereIn('id', $idCategories)->orderBy('id', 'DESC')->paginate($perpage)->appends(request()->query());
    //             break;
    // }

    // Trả về view 'cuahang.blade.php' với dữ liệu sản phẩm
    return view('cuahang', ['products' => $products, 'danhmucsach' => $danhmucsach]);
}



    public function timkiem(Request $request)
    {
        $searchTerm = $request->input('timkiem');
        $page = 24;

        // Thực hiện tìm kiếm dựa trên $searchTerm
        $productsQuery = Cuahang::with('category')
            ->where('name', 'like', '%' . $searchTerm . '%');

        // Thực hiện tìm kiếm theo tên danh mục
        $productsQuery->orWhereHas('category', function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%');
        });

        // Lọc theo
        if ($sortBy = $request->input('sort_by')) {
            $validSortOptions = ['giagiamdan', 'giatangdan', 'tuadenz', 'tuzdena'];
            if (in_array($sortBy, $validSortOptions)) {
                $direction = $sortBy === 'giatangdan' ? 'ASC' : 'DESC';
                $productsQuery->orderBy('name', $direction)->orderBy('price', $direction);
            }
        }

        $products = $productsQuery->paginate($page)->appends(request()->query());

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
        $products = cuahang::where('id', '=', $id)->get();
        $comment = Comment::where('idProduct', $products[0]->id)->orderBy('id', 'DESC')->get();
        $tg = Product::where('id', '=', $id)->get();
        foreach ($products as $key => $value) {
            $idCategory = $value->idCategory;
        }
        $yeuthich = Product::where('id', '=', $id)->get();
        $sanphamlienquan = DB::table('pro_cate')
            ->where('idCategory', $idCategory)
            ->limit(6)
            ->get();

        return view('chitiet', compact('products', 'hot', 'comment', 'yeuthich', 'tg'))
            ->with('sanphamlienquan', $sanphamlienquan);
    }
    public function favorite($idProduct)
    {
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
    public function post_comment($proId)
    {
        $data = request()->all('content');
        $data['idProduct'] = $proId;
        $data['idUser'] = auth()->id();
        if (comment::create($data)) {
            return redirect()->back()->with('success', 'Bình luận đã được gửi');
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

    function chitietnew($id)
    {
        $chitietnew = Tintuc::find($id);
        return view('chitietnew', ['chitietnew' => $chitietnew]);
    }
    public function listtintuc()
    {
        $listtintuc = Tintuc::orderBy('created_at', 'desc')
                            ->paginate(5);

        return view('admin.listtintuc', compact('listtintuc'));
    }

    function themtin()
    {
        return view('admin.tin.themtin');
    }

    function themtin_(Request $request)
    {
        $imgPath = $request->file('img')->store('img', 'public');
        $t = new Tintuc;
        $t->title = $request->input('title');
        $t->img = '/storage/' . $imgPath;
        $t->summary = $request->input('summary');
        $t->content = $request->input('content');
        $t->hidden = $request->input('visibility', 1);
        $t->save();

        return redirect()->route('listtintuc')-> with('success','Tin tức đã được thêm thành công');
    }

    

    function xoa($id)
    {
        $t = Tintuc::find($id);
        $t->delete();
        return redirect()->route('listtintuc');
    }

    function suatin($id)
    {
        $tintuc = Tintuc::find($id);
        return view("admin.tin.suatin", compact('tintuc'));
    }

     function capnhat(Request $request, $id)
    {
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
        return redirect()->route('listtintuc')->with('success', 'Tin tức đã được cập nhật thành công');
    }

    function lienhe() {
        return view('lienhe');
    }

    function gioithieu()
    {
        return view('gioithieu');
    }

}