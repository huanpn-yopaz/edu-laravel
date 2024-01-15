<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChangePassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('page.changepass');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'password' => 'required|min:8',
        ], [
            'password.required' => 'Không được bỏ trống',
            'password.min' => 'Lớn hơn 8 kí tự',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        toastr()->success('Đổi mật khẩu thành công');

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
