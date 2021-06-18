<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Sale;
use App\Models\SaleDish;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($error = null)
    {
        if ($error) {
            $categories = Category::all();
            $category = Category::find(1);
            $dishes = Dish::with("allergies")->where('category_id', '=', 1)->get();
            $errorMessage = $error;

            return view('customer.category', [
                'categories' => $categories,
                'category' => $category,
                'dishes' => $dishes,
                'errorMessage' => $errorMessage,
            ]);
        }
        return redirect(route('getCategory', 1));
    }

    public function category($category_id)
    {
        $categories = Category::all();
        $category = Category::find($category_id);
        $dishes = Dish::with("allergies")->where('category_id', '=', $category_id)->get();
        $errorMessage = '';

        return view('customer.category', [
            'categories' => $categories,
            'category' => $category,
            'dishes' => $dishes,
            'errorMessage' => $errorMessage,
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

        $previousSale = Sale::query()->where([
            ['table', '=', $request->input('table')],
            ['created_at', '>', Carbon::now()->subMinutes(10)->toDateTimeString()]
        ])->get();
        if (count($previousSale) > 0) {
            return redirect(route('getIndex', 'Je hebt minder dan 10 minuten geleden nog een bestelling geplaatst.'));
        }

        if (count($order) > 0) {
            // create order
            $sale = Sale::create([
                'table' => $request->input('table')
            ]);
            foreach ($order as $dish) {
                SaleDish::create([
                    'sales_id' => $sale->id,
                    'dishes_id' => $dish->id,
                ]);
            }
        }
        else {
            return redirect(route('getIndex', 'Je bestelling was leeg.'));
        }
        return redirect(route('getIndex', ''));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id){
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
