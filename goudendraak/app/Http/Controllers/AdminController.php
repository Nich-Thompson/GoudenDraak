<?php

namespace App\Http\Controllers;

use App\Exports\SalesRapport;
use App\Models\SaleDish;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function sales()
    {
        $files = Storage::files('.');
        $sheets = array();
        foreach ($files as $key => $value) {
            if ($value != ".gitignore") {

                $value = str_replace("public/", "", $value);
                array_push($sheets, $value);
            }
        }

        $sheets = array_reverse($sheets, false);

        return view("admin.sales", ["sheets" => $sheets]);
    }

    public function storeSales()
    {
        $date = date('Y-m-d');
        $filename = "sales" . $date . ".xlsx";

        return Excel::store(new SalesRapport($date), $filename)->put(public_path('storage/'));
    }

    public function getFile($filename)
    {
        $file = Storage::disk('sheets')->get($filename);

        return (new Response($file, 200))
            ->header('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    }
}
