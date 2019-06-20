<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $date=date('Y-m-d');
        $val=$req->session()->get('email');
        $far=DB::table('personals')->where('status','=',1)->get();
        $cat=DB::table('categories')->get();
        $pro=DB::table('auctionpayment_controllers')->get();
        $c=count($pro);
         for($i=0;$i<$c;$i++)  
       {
           if(($pro[$i]->paymentdate<$date) && ("not paid"==$pro[$i]->stat))
           {
               $aid=$pro[$i]->aid;
               DB::table('auction_items')->where('id',$aid)->update(array(
                'status'=>'Auction return to admin',
        ));
        DB::table('auctionpayment_controllers')->where('aid',$aid)->update(array(
            'stat'=>'Auction return to admin',
    ));

           }
      
        }
        $pro1=DB::table('auction_items')->get();
        $c1=count($pro1);
         for($i=0;$i<$c1;$i++)  
       {
           if(($pro1[$i]->start<$date) && ("go to bid"==$pro1[$i]->status))
           {
            $aid=$pro1[$i]->id;
               DB::table('auction_items')->where('id',$aid)->update(array(
                'status'=>'Auction return to admin',
        ));
        

           }
      
        }
      
        $crop=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
        $data=DB::table('auction_items')->where('status','=','Auction return to admin')->get();

        return view('admin.managetool',compact('data','date','far','cat','crop'))->with('sess',$val);


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
    public function edit($id,Request $req)
    {
        $date=date('Y-m-d');
        $val=$req->session()->get('email');
        $far=DB::table('personals')->get();
        $cat=DB::table('categories')->get();
        // $pro=DB::table('products')->get();
      
        $crop=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
        $data=DB::table('auction_items')
        ->join('biddings','biddings.aid','=','auction_items.id')
        ->select('auction_items.id','auction_items.toolname','auction_items.start','auction_items.image','biddings.memberid','biddings.amount')
        ->where(['auction_items.id'=>$id])
        ->where(['auction_items.status'=>'get bid'])
        ->get();
        $r=     DB::table('auction_items')->where('id',$id)->update(array(
            'status'=>'stop',
)); 
        $data1=DB::table('auction_items')
       ->join('biddings','biddings.aid','=','auction_items.id')
       ->select('auction_items.id','auction_items.toolname','auction_items.start','auction_items.image','biddings.memberid','biddings.amount')
       ->where(['auction_items.id'=>$id])
       ->where(['auction_items.status'=>'stop'])
       ->get();
      
       return view('admin.runningauctionview',compact('data','date','far','cat','crop','data1'))->with('sess',$val);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $val=$req->session()->get('email');
        $bidid=$req->input('bb');
        $aid=DB::table('biddings')->where('id',$bidid)->select('aid')->pluck('aid')->first();
        $date=$req->input('date');
        DB::table('auction_items')->where('id',$aid)->update(array(
			'status'=>'payment under process',
)); 
$result=DB::insert("insert into auctionpayment_controllers(paymentdate,stat,bidid,aid) values(?,?,?,?)",[$date,'not paid',$bidid,$aid]);
$far=DB::table('personals')->get();
$cat=DB::table('categories')->get();
// $pro=DB::table('products')->get();
$date=date('Y-m-d');
$q=0;
$crop=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
$au=DB::table('auction_items')->where('status','new')->get();
$au1=DB::table('biddings')->where('statuss',0)->get();
            return view('admin.admin',compact('far','cat','crop','au','au1'))->with('alert','Successfully send Payment Notification To Bidder');
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
