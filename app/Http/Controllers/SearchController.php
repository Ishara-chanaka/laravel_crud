<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $data = \DB::table('student_details')->paginate(10);
        return view('student.studentSearch', compact('data'));
    }
    
    public function advance(Request $request)
    {
        $getdaterange = explode("-",$request->input('searchdate'));
      // dd($request->input('searchgender'));
        $min_date = date('d-m-Y', strtotime($getdaterange[0]));
        $max_date = date('d-m-Y', strtotime($getdaterange[1]));

        $data = \DB::table('student_details');
        if( $request->input('searchstnumber')){
            $data = $data->where('student_id', '=', $request->input('searchstnumber'));
        }
        if( $request->input('searchgender') ){
            $data = $data->where('gender', '=', $request->input('searchgender'));
           
        }
        if( $min_date != date('d-m-Y') && $max_date != date('d-m-Y')){
            $data = $data->where('registereddate', '>=', $min_date)
                         ->where('registereddate', '<=', $max_date );
        }
        $data = $data->paginate(10);
        return view('student.studentSearch', compact('data'));
    }
}
