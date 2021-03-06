<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;

class CategoriesController extends Controller {
	public function show(Category $category) {
		// 读取分类 ID 关联的话题，并按每 20 条分页
		$topics = Topic::where('category_id', $category->id)->paginate(20);
		// 传参变量话题和分类到模板中
		return view('topics.index', compact('topics', 'category'));
	}
}