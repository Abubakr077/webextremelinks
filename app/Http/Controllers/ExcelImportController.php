<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\YourImportClass;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File;

class ExcelImportController extends Controller
{
    public function import()
    {
        // Get the uploaded file

        $address = public_path('sites.xlsx');
 
        // Process the Excel file
        Excel::import(new YourImportClass, $address);
        echo 'done';
    }
}
