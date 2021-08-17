<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Author extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Trả về trang chủ quản lý cái bảng mà mình mong muốn hiển thị
        // Biến = Model::cái hàm mà muốn sử dụng (where, get, all)
        // Return về cái view index cùng với cái biến
        // $user = "ABC";
        // return view('welcome', compact('user'));
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Trả về cái trang chứa form thêm
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Hàm này sẽ được gọi ở trong form của trang create
        // Hàm này sẽ xử lý các thông tin trong request === form
        // Lúc này data trong cái form body sẽ được biến request lưu lại
        dd($request);
        // $user = Model::create([

        // ])
        // $user->id
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
