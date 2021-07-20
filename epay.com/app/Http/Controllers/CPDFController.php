<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer_balance;
use Validator;
use PDF;
use Carbon\Carbon;

class CPDFController extends Controller
{
    public function balancePDF(Request $req)
    {
        $data = $req->session()->get('username');
        $data = Customer_balance::where('username','=',$data)
        ->where('created_at', '>', Carbon::now()->subDays(7))
        ->get();
        view()->share('balance', $data);
        $pdf = PDF::loadView('customer.pdfBalance', $data);
        return $pdf->download('Customer_Balance.pdf');

    }

    public function approvedPDF(Request $req)
    {
        $data = $req->session()->get('username');
        $data = Customer_balance::where('username','=',$data)
        ->where('status','=','Approved')
        ->get();
        view()->share('loan', $data);
        $pdf = PDF::loadView('customer.pdfApprovedStatus', $data);
        return $pdf->download('Approved_Status_Details.pdf');

    }

    public function pendingPDF(Request $req)
    {
        $data = $req->session()->get('username');
        $data = Customer_balance::where('username','=',$data)
        ->where('status','=','Pending')
        ->get();
        view()->share('loan', $data);
        $pdf = PDF::loadView('customer.pdfPendingStatus', $data);
        return $pdf->download('Pending_Status_Details.pdf');

    }

    public function balanceLOG(Request $req){

        $sevenPendingDays = $req->session()->get('username');
        $sevenPendingDays = Customer_balance::where('username','=',$sevenPendingDays)
        ->where('created_at', '>', Carbon::now()->subDays(7))
        ->where('status','Pending')
        ->orderBy('created_at', 'DESC')
        ->get();

        $sevenApprovedDays = $req->session()->get('username');
        $sevenApprovedDays = Customer_balance::where('username','=',$sevenApprovedDays)
        ->where('created_at', '>', Carbon::now()->subDays(7))
        ->where('status','Approved')
        ->orderBy('created_at', 'DESC')
        ->get();

        $sevenPendingCount = count($sevenPendingDays);
        $sevenApprovedCount = count($sevenApprovedDays);
        
        return view('customer.balancelog', 
        compact('sevenPendingDays', 'sevenApprovedDays', 
                'sevenPendingCount', 'sevenApprovedCount'
            ));

    }

}
