<?php

namespace App\Http\Controllers;

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
        $orders = Sale::all();
        return view('register.orders', [
            'orders' => $orders,
        ]);
    }

    public function order($id)
    {
        $dishes = SaleDish::query()->where('sales_id', '=', $id)->get();
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

    public function getEmployees()
    {
//        $cashRegisterIds = ModelHasRole::query()->where('role_id', '=', '2')->pluck('model_id');
//        $cashRegisterEmployees = User::query()->whereIn('id', $cashRegisterIds)->get();
        $employees = User::all()->sortBy('name');

        return view('register.employees', [
//            'cashRegisterEmployees' => $cashRegisterEmployees
            'employees' => $employees
        ]);
    }
}
