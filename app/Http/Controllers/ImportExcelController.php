<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Exports\BulkExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Bulk;

class ImportExcelController extends Controller
{
    public function index(){
        $bulk = Bulk::get();
        return view('report', ['data' => $bulk]);
    }

    public function loadFileImport(){
        return view('index');
    }

    public function fileImport(Request $request) 
    {
        // Excel::import(new ImportEmployee, $request->file('file')->store('temp'));
        // return back();
        Excel::import(new BulkImport,request()->file('file'));
        $bulk = Bulk::get();
        return view('report', ['data' => $bulk]);
    //    return back();
    }
}
