<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function create(Request $request, Categories $categories) {
        if ($request->isMethod('post')) {
            $request->flash();
            $arr = $request->except('_token');

            File::put(storage_path() . '/order.json', json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            //dd($arr);

            //TODO добавить в массив
            //TODO сохранить заказ пользователя в файл в json
            return redirect()->route('order');
        }

        return view('admin.create',[
            'categories' => $categories->getCategories()
        ]);
    }


}
