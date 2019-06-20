<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Edit1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$id)
    {
        $val=$req->session()->get('email');
        $data1=DB::table('auction_items')
       ->join('biddings','biddings.aid','=','auction_items.id')
       ->select('auction_items.id','auction_items.toolname','auction_items.start','auction_items.image','biddings.memberid','biddings.amount')
       ->where(['auction_items.id'=>$id])
       ->get();
       $mail=DB::table('biddings')->where('aid',$id)->select('memberid')->pluck('memberid')->first();
       $id1=DB::table('personals')->where('email',$mail)->select('did')->pluck('did')->first();
       $data=DB::table('details')
	   ->join('personals','personals.did','=','details.id')
	  ->select('personals.fname','personals.lname','personals.email','personals.ph','personals.image','details.housename','details.country','details.state','details.district','details.panchayath','details.pin','personals.did')
	  ->where('personals.id',$id1)
      ->get();
    //   echo $data1;
    //   echo $data;
      $far=DB::table('personals')->get();
    $cat=DB::table('categories')->get();
    // $pro=DB::table('products')->get();
   $date=date('Y-m-d');
    $q=0;
   
    $crop=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
      return view('admin.auctionuserprofile',compact('data','data1','far','crop','cat'))->with('sess',$val);
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
