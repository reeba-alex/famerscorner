<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class DropdownController extends Controller
{
    public function index()
    {
        $val1=0;
        $data=DB::table('details')
       ->join('personals','personals.did','=','details.id')
       ->select('personals.did','personals.fname','personals.lname','personals.email','personals.ph','details.housename','details.country','details.state','details.district','details.panchayath','details.pin')
       ->where(['personals.status'=>0])
       ->get();
       $count=count($data);
       //echo $count;
       $date=date('Y-m-d');
       $far=DB::table('personals')->where('status','=',1)->get();
    $cat=DB::table('categories')->get();
    // $pro=DB::table('products')->get();
    $crop=DB::table('cropregs')->where('email','!=','null')->where('expiration','>=',$date)->where('quantity','>',0)->get();
      return view('newfarmer',compact('data','count','far','cat','pro','crop'));


       
   }

   public function cityajax($id)
    {
        // return $id;
       // $city = DB::table('tbl_city')->get();
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
       $city = city::where("country_id",$id)->get()->toJson();
        return $city;
    }
   
}
