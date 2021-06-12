<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(route('getCategory', 1));
    }

    public function category($category_id)
    {
        $categories = Category::all();
        $category = Category::find($category_id);
        $dishes = Dish::query()->where('category_id', '=', $category_id)->get();
        return view('customer.category', [
            'categories' => $categories,
            'category' => $category,
            'dishes' => $dishes,
        ]);
    }

    public function viewOrder()
    {
        $categories = Category::all();
        return view('customer.order', [
            'categories' => $categories,
        ]);
    }

    public function cocktails()
    {
        $categories = Category::all();
        return view('customer.cocktails', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
