<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function index(){
        return view();
    }

    public function store(){
        $a + $b = $c;
        return view('', \compact('c'));
    }

    public function update(){
        $c = $newValue;
        return redirect()->back()->with('thongbao', 'noidungthongbao');
    }

    public function delete(){
        $c->delete();
        return redirect()->back()->with('thongbao', 'noidungthongbao');
    }

    public function search(){

    }

    public function filter(){

    }

    public function addToCart(){
        $gioHang = "rong";
    }

    public function changeQuantity(){

    }
}
