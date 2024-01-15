<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RuleRegister;
use App\Models\Users;
use App\Models\Comment;


class UserController extends Controller
{
    // tao user
public function create()
{
    return view('user.create'); 

    
}
 //validation register

//  public function store_(RuleRegister $request){  
        
          
//  }   


// public function store()
// {
//     $this->validate(request(), [
//         'name' => 'required','min:3','max:20',
//         // 'img',
//         'email' => 'required|email',
//         'password' => 'required',
//         // 'address',
//         // 'phone',
//         // 'status',
//         // 'role',
//     ]);
    
//     $user = User::create(request(['name', 'email', 'password',]));
    
//     auth()->login($user);
    
//     return redirect()->to('/');
//  }


        public function store_(RuleRegister $request){
            // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
            // dd($request);

            // gán dữ liệu gửi lên vào biến data
            $data = $request->all();
            // dd($data);
            // mã hóa password trước khi đẩy lên DB
            $data['password'] = Hash::make($request->password);

            // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
            User::create($data);
            echo"success create user";
        }

// edit user
        public function edit($id){
            // Tìm đến đối tượng muốn update
            $user = User::findOrFail($id);

            // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
            return view('user.edit', compact('user'));
        }
        public function update(Request $request, $id){
            // Tìm đến đối tượng muốn update
            $user = User::findOrFail($id);
    
            // gán dữ liệu gửi lên vào biến data
            $data = $request->all();
            // dd($data);
            // mã hóa password trước khi đẩy lên DB
            $data['password'] = Hash::make($request->password);
    
            // Update user
            User::find($id)->update($data);
            echo"success update user";
        }

        // delete user
        public function delete($id){
            
            // Tìm đến đối tượng muốn xóa
            $user = Users::findOrFail($id);
            // Xóa tất cả các nhận xét liên kết với người dùng
            $comments = Comment::where('idUser', 'id')->get();
            if($user->comments !== null){
                foreach ($comments as $comment){
                    $comment->delete();
                }
            }
            $user->delete();
            
            return redirect()->to('/admin/list-user');
        }
}
