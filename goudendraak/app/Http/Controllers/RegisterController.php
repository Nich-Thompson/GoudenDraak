<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Role;
use App\Models\Sale;
use App\Models\SaleDish;
use App\Models\User;
use App\Models\ModelHasRole;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Sale::all()->sortByDesc('created_at');
        return view('register.orders', [
            'orders' => $orders,
        ]);
    }

    public function order($id)
    {
        $dishes = SaleDish::query()->where('sales_id', '=', $id)->get()->sortBy('dishes_id');
        return view('register.order', [
            'dishes' => $dishes,
            'saleId' => $id
        ]);
    }

    public function addComment($id, Request $request)
    {
        $dish = SaleDish::find($id);
        $saleId = $request->input('saleId');

        $dish->comment = $request->input('comment');

        $dish->save();

        return redirect(route('getRegisterOrder', $saleId));
    }

    public function dishes()
    {
        $dishes = Dish::all();
        return view('register.dishes', [
            'dishes' => $dishes,
        ]);
    }

    public function search(Request $request)
    {
        $dishNames = Dish::query()->where('name', 'LIKE', '%' . $request->searchTerm . '%')->get();
        $dishNumbers = Dish::query()->where('number', 'LIKE', '%' . $request->searchTerm . '%')->get();
        $dishCategories = Dish::query()->whereIn('category_id',
            Category::query()->where('name', 'LIKE', '%' . $request->searchTerm . '%')->pluck('id'))->get();

        $dishes = $dishNames->merge($dishNumbers);
        $dishes = $dishes->merge($dishCategories);

        return view('register.dishes', [
            'dishes' => $dishes,
        ]);
    }
}
