<?php

namespace App\Http\Controllers;

use App\Exports\SalesRapport;
use App\Models\SaleDish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function sales()
    {
        $dates = SaleDish::query()->distinct()->get(['created_at'])->sortByDesc('created_at');

        return view("admin.sales", ["dates" => $dates]);
//        return Excel::download(new SalesRapport, 'sales.xlsx');
    }
}
