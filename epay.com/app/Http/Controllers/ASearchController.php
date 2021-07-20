<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ASearchController extends Controller
{
    
        public function index()
     {
     return view('admin.admin');
     }

     public function search(Request $request)
     {
      if($request->ajax())
      {
       $output = '';
       $query = $request->get('query');
       
       if($query != '')
       {
          
        $data = DB::table('customer_table')
        
        ->where('userId', 'like', '%'.$query.'%')
          ->orWhere('username', 'like', '%'.$query.'%')
          ->orWhere('email', 'like', '%'.$query.'%')
          ->orderBy('userId', 'desc')
          ->get();

          $dataa = DB::table('admin_table')
        
        ->where('userId', 'like', '%'.$query.'%')
          ->orWhere('username', 'like', '%'.$query.'%')
          ->orWhere('email', 'like', '%'.$query.'%')
          ->orderBy('userId', 'desc')
          ->get();

          $datad = DB::table('desk_manager_table')
        
        ->where('userId', 'like', '%'.$query.'%')
          ->orWhere('username', 'like', '%'.$query.'%')
          ->orWhere('email', 'like', '%'.$query.'%')
          ->orderBy('userId', 'desc')
          ->get();
          
          $datas = DB::table('service_provider_table')
        
          ->where('userId', 'like', '%'.$query.'%')
            ->orWhere('username', 'like', '%'.$query.'%')
            ->orWhere('email', 'like', '%'.$query.'%')
            ->orderBy('userId', 'desc')
            ->get();

      if($data->count() > 0){

            $total_row = $data->count();
        if($total_row > 0)
        {
          $output .= '
          <h5 align="center">All user Account Details</h5><br />
 
          <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          </tr>
         ';
         foreach($data as $row)
         {
            
          $output .= '
          <tr>
           <td>'.$row->username.'</td>
           <td>'.$row->name.'</td>
           <td>'.$row->email.'</td>
           <td>'.$row->type.'</td>
          
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

      elseif($dataa->count() >0){

            $total_row = $dataa->count();
            if($total_row > 0)
            {
              $output .= '
              <h5 align="center">All user Account Details</h5><br />
     
              <tr>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Type</th>
              </tr>
             ';
             foreach($dataa as $row)
             {
                
              $output .= '
              <tr>
               <td>'.$row->username.'</td>
               <td>'.$row->name.'</td>
               <td>'.$row->email.'</td>
               <td>'.$row->type.'</td>
              
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
            $dataa = array(
             'table_data'  => $output,
             'total_data'  => $total_row
            );
     
            
      
            echo json_encode($dataa);
          }
          
      elseif($datad->count() >0){

            $total_row = $datad->count();
            if($total_row > 0)
            {
              $output .= '
              <h5 align="center">All user Account Details</h5><br />
     
              <tr>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Type</th>
              </tr>
             ';
             foreach($datad as $row)
             {
                
              $output .= '
              <tr>
               <td>'.$row->username.'</td>
               <td>'.$row->name.'</td>
               <td>'.$row->email.'</td>
               <td>'.$row->type.'</td>
              
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
            $datad = array(
             'table_data'  => $output,
             'total_data'  => $total_row
            );
     
            
      
            echo json_encode($datad);
          }

        elseif($datas->count() >0){

            $total_row = $datas->count();
            if($total_row > 0)
            {
              $output .= '
              <h5 align="center">All user Account Details</h5><br />
     
              <tr>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Type</th>
              </tr>
             ';
             foreach($datas as $row)
             {
                
              $output .= '
              <tr>
               <td>'.$row->username.'</td>
               <td>'.$row->name.'</td>
               <td>'.$row->email.'</td>
               <td>'.$row->type.'</td>
              
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
            $datas = array(
             'table_data'  => $output,
             'total_data'  => $total_row
            );
     
            
      
            echo json_encode($datas);
          }
          else{
            $output = '
             <tr>
              <td align="center" colspan="5">No Data Found</td>
             </tr>
             ';
             
          }

       }
      
      }
 
     }
     
}
