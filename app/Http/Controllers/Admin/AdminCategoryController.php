<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Logic;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $category = Logic\CategoryLogic::getAllCategory();

        return view('admin.category.index', ['category' => $category]);
    }

    public function add(Request $request)
    {
        $data = array();
        $data['success_msg'] = null;
        $data['warning_msg'] = null;

        if ($request->isMethod('get')) {
            return view('admin.category.add', $data);
        }
        elseif ($request->isMethod('post')) {
            $category_name = $request->input('name');
            if (Logic\CategoryLogic::addCategory($category_name)) {
                $data['success_msg'] = '类目添加成功';
                return view('admin.category.add', $data);
            } else {
                $data['warning_msg'] = '类目已存在,无需重复添加';
                return view('admin.category.add', $data);
            }

        }
    }
}