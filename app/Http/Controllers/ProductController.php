<?php

namespace App\Http\Controllers;


class ProductController extends Controller{
    // 小テスト３用
    public function index(){
        $items = [
            'マイク', 'コンセント', 'コード'
        ];

        return view('products.index', compact('items'));
    }
}
