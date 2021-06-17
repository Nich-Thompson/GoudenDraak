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
        $dishes = Dish::with("allergies")->where('category_id', '=', $category_id)->get();

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

    public function placeOrder(Request $request)
    {
        $order = json_decode($request->order);
        $categories = Category::all();

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
        return view("customer.order-success", [
            'categories' => $categories,
        ]);
    }

    public function destroy($id)
    {
        return redirect(route('getCategory', 1));
    }

    public function favorite()
    {
        $categories = Category::all();
        return view('customer.favorites', [
            'categories' => $categories,
        ]);
    }
}
