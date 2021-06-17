<?php

namespace App\Http\Controllers;

use App\Exports\SalesRapport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function sales()
    {
        return Excel::download(new SalesRapport, 'sales.xlsx');
    }
}
