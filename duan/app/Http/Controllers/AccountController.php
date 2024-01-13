<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\password_reset_tokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\RuleRegister;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function login_(){
        $credentials = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];


        if (Auth::attempt($credentials)) {  
            // nếu role = 1 thì vào admin nếu role = 0 thì vào home

            
                return redirect('/')->with('thongbao','Đăng nhập thành công');

        }

            return redirect('login')->with('thongbao','Đăng nhập thất bại');

    }
    public function register(){
        return view('admin.register');
    }
    public function favorite(){
        $yeuthich = auth()->user()->yeuthich;
        return view('favorite',compact('yeuthich'));
    }
    public function register_()
    {
        $user = new User();

        if ($_POST['password'] == $_POST['repassword']) {
            $existingUser = User::where('email', $_POST['email'])->first();
            if ($existingUser) {
                return redirect('register')->with('thongbao', 'Email đã tồn tại trong hệ thống, vui lòng chọn email khác');
            }

            // Thiết lập thông tin người dùng
            $user->name = $_POST['name'] . ' ' . $_POST['lastname'];
            $user->email = $_POST['email'];
            $user->address = $_POST['address'];
            $user->phone = $_POST['phone'];
            $user->password = $_POST['password'];

            

            // Đặt ảnh đại diện mặc định
            $defaultAvatarPath = '/img/user.png'; // Đặt đúng đường dẫn của ảnh đại diện mặc định
            $user->avatar = $defaultAvatarPath;

            // Lưu thông tin người dùng
            $user->save();

            return redirect('login')->with('thongbao', 'Đăng ký thành công');
        } else {
            return redirect('register')->with('thongbao', 'Mật khẩu không khớp');
        }
    }
    public function forgot_password(){
        return view('admin.forgot-password');
    }
    public function forgot_password_(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['thongbao' => 'Đã gửi liên kết đặt lại mật khẩu vào email của bạn!'])
            : back()->withErrors(['email' => __($status)]);

    }
    public function reset_password(Request $request){
        $token = bcrypt($request->token);
        // dd($token);
        $email = $request->email;
        // $password_reset_token = password_reset_tokens::where('email',$email)->first();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }    
    // Phương thức để hiển thị form sửa thông tin người dùng
    public function edit()
    {
        $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        return view('edit-profile', compact('user'));
        // Thay 'edit-profile' bằng tên view của bạn để hiển thị form sửa thông tin người dùng
    }

    public function update(Request $request)
{
    $validatedData = $request->validate([
        'password' => 'required',
        'new_password' => 'nullable|min:6',
        'name' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'phone' => 'required',
    ]);

    $user = auth()->user();

    if (Hash::check($request->password, $user->password)) {
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->back()->with('success', 'Thông tin cá nhân đã được cập nhật.');
    } else {
        return redirect()->back()->with('error', 'Mật khẩu không chính xác.');
    }
}

    // Phương thức để cập nhật thông tin người dùng
    // public function update(Request $request)
    // {
    //     $user = Auth::user();

    //     // Kiểm tra và xác nhận dữ liệu từ form
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:users,email,' . $user->id,
    //         'address' => 'nullable|string|max:255',
    //         'phone' => 'nullable|string|max:20',
    //         // Các trường thông tin khác có thể cần được kiểm tra và xác nhận tùy thuộc vào hệ thống của bạn
    //     ]);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->address = $request->address;
    //     $user->phone = $request->phone;
    //     $user->save();

    //     return redirect()->route('profile.edit')->with('success', 'Thông tin của bạn đã được cập nhật');
    // }
}
