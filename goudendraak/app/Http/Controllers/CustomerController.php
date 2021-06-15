<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Sale;
use App\Models\SaleDish;
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

    public function placeOrder(Request $request)
    {
        $order = json_decode($request->order);
        if (count($order) > 0) {
            // create order
            $sale = Sale::create([
            ]);
            foreach ($order as $dish) {
                SaleDish::create([
                    'sales_id' => $sale->id,
                    'dishes_id' => $dish->id,
                ]);
            }
        }
        
        return redirect(route('getCategory', 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
