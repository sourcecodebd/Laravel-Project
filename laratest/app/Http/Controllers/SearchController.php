<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function index()
    {
     return view('customer.customer');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      
      if($query != '')
      {
       $data = DB::table('customer_balance')
         ->where('id', 'like', '%'.$query.'%')
         ->orWhere('username', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('card_no', 'like', '%'.$query.'%')
         ->orWhere('bank_name', 'like', '%'.$query.'%')
         ->orWhere('phone', 'like', '%'.$query.'%')
         ->orWhere('mobile_recharge', 'like', '%'.$query.'%')
         ->orWhere('electricity_bill', 'like', '%'.$query.'%')
         ->orWhere('balance', 'like', '%'.$query.'%')
         ->orWhere('total_purchased', 'like', '%'.$query.'%')
         ->orWhere('created_at', 'like', '%'.$query.'%')
         ->orWhere('updated_at', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
          return 0;
       /* $data = DB::table('customer_balance')
         ->orderBy('id', 'desc')
         ->get(); */
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        
        <tr>
        <th>Username</th>
        <th>Card Number</th>
        <th>Bank Name</th>
        <th>Cashed-In</th>
        <th>Cashed-Out</th>
        <th>Loan</th>
        <th>Mobile Recharge</th>
        <th>Electricity Bill</th>
        <th>Balance</th>
        <th>Total Purchased</th>
        <th>Account Creation Time</th>
        <th>Account Updated Time</th>
        </tr>
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->card_no.'</td>
         <td>'.$row->bank_name.'</td>
         <td>'.$row->added.'</td>
         <td>'.$row->transferred.'</td>
         <td>'.$row->loan.'</td>
         <td>'.$row->mobile_recharge.'</td>
         <td>'.$row->electricity_bill.'</td>
         <td>'.$row->balance.'</td>
         <td>'.$row->total_purchased.'</td>
         <td>'.$row->created_at.'</td>
         <td>'.$row->updated_at.'</td>
        </tr>
        
        ';
       }
      }
      else
      {

       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';

      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }

    }
  
  }
