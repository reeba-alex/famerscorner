<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val1=0;
        $data=DB::table('details')
       ->join('personals','personals.did','=','details.id')
       ->select('personals.id','personals.did','personals.fname','personals.lname','personals.email','personals.status','personals.ph','details.housename','details.country','details.state','details.district','details.panchayath','details.pin')
       ->where(['personals.status'=>1])
       ->get();
       $count=count($data);
       $date=date('Y-m-d');
       $date=date('Y-m-d');
       $far=DB::table('personals')->where('status','=',1)->get();
    $cat=DB::table('categories')->get();
    // $pro=DB::table('products')->get();
    $crop=DB::table('cropregs')->where('email','!=','null')->where('expiration','>=',$date)->where('quantity','>',0)->get();
      return view('admin.cropsee',compact('data','count','far','cat','pro','crop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  echo $id;
        DB::table('accounts')->where('email',$id)->update(array(
             'status'=>0,)); 
             DB::table('personals')->where('email',$id)->update(array(
            'status'=>0,)); 
 return redirect()->back()->with('alert','Blocked');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
