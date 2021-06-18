<?php

namespace App\Exports;

use App\Models\SaleDish;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SalesRapport implements FromView
{
    protected $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function view(): View
    {
        $sales = SaleDish::with("sales", "dishes")->where("created_at", "=", $this->date)->get();
        $total_earned = 0;

        foreach ($sales as $sale) {
            foreach ($sale->dishes as $dish) {
                $total_earned += $dish->price;
            }
        }

        return view('admin.exports.sales', [
            'sales' => $sales, "total_earned" => $total_earned]);
    }

}
