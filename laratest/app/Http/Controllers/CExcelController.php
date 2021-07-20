<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CExcelRequest;
use Illuminate\Validation\Rule;
use App\Exports\CBalanceDownload;
use App\Imports\CBalanceUpload;
use Maatwebsite\Excel\Facades\Excel;

class CExcelController extends Controller
{
    /* EXCELL IMPORT(UPLOAD)-EXPORT(DOWNLOAD) */

    public function uploadExcelview()
    {
    return view('customer.uploadExcelview');
    }

    public function upload(CExcelRequest $req) 
    {
        Excel::import(new CBalanceUpload, request()->file('file'));
        $req->session()->flash('msg', 'Excel uploaded into database successfully...check it out!');
        return back();
    }

    public function downloadExcel() 
    {
        return Excel::download(new CBalanceDownload, 'Customer_Balance.xlsx');
    }

}
