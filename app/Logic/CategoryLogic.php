<?php
namespace App\Logic;

use App\Models\Category;
use Illuminate\Database\QueryException;

/**
 * 类目相关的业务逻辑
 *
 */
class CategoryLogic extends Logic
{
    static public function getAllCategory()
    {
        $categories = Category::all();

        return $categories;
    }

    /**
     * 新增栏目
     *
     * @param string $name 栏目名称
     */
    static public function addCategory($name)
    {
        $category = new Category();
        $category->name = $name;
        try {
            $category->save();
        } catch (QueryException $e) {
            return false;
        }
        return true;
    }
}
