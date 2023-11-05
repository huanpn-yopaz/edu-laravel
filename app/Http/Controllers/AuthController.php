<?php
namespace App\Http\Controllers;
session_start();
use App\Models\Objects;
use App\Models\User;
use App\Models\Zoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        return view('page.login')->with(compact('object','zoom'));
    }
    public function register()
    {
        $object=Objects::latest('id_object')->get();
        $zoom=Zoom::latest('id_zoom')->get();
        
        return view('page.register')->with(compact('object','zoom'));
    }
    public function check_login(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'password.required' => 'Không được bỏ trống',
            'password.min' => 'Lớn hơn 8 kí tự',
            'email.required' => 'Không được bỏ trống',
            'email.email' => 'Sai định dạng Email'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::check() && Auth::user()->role=='1') {
                toastr()->success('Đăng nhập quản trị viên');
                return redirect('dashboard');
            }
            elseif (Auth::check()) {
                $cookie = cookie('user', Auth::user()->name, 10080);
                toastr()->success('Đăng nhập thành công');
                return redirect('/')->withCookie($cookie);
            }
        } else {
            toastr()->error('Sai email hoặc mật khẩu');
            return back();
        };
    }
    public function check_register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:35',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Không được bỏ trống',
            'name.max' => 'Nhỏ hơn 35 kí tự',
            'password.required' => 'Không được bỏ trống',
            'password.min' => 'Lớn hơn 8 kí tự',
            'email.required' => 'Không được bỏ trống',
            'email.unique' => 'Email đã được sử dụng',
            'email.email' => 'Sai định dạng Email'
        ]);
        $user = $request->all();
        User::create($user);
        toastr()->success('Đăng kí thành công');
        return back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function logout()
    {
        if(Cookie::has('user')){
           Cookie::queue( Cookie::forget('user'));
        }
        Auth::logout();
        toastr()->success('Đăng xuất thành công');
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
