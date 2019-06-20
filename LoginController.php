<?php

namespace App\Http\Controllers;

use App\Login;
use App\Account;
use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index2');
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
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login,$id)
    {
       $val=$id;
	   $val1=0;
       DB::table('accounts')->where('email',$val)->update(array(
                                 'status'=>1,)); 
								 DB::table('personals')->where('email',$val)->update(array(
                                 'status'=>1,)); 
return redirect()->back()->with('alert','Approvation completed');	
    }
	
	public function loginn()
    {
       return view('login');
    }
	
	
	public function login(Request $request)
    {
		
        /*$username=$req->input('email');
	$password=$req->input('password');
		$checkLogin1=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>1,'online'=>0,'status'=>1])->get();
		$checkLogin2=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>2,'online'=>0,'status'=>0])->get();
		$checkLogin3=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>3,'online'=>0,'status'=>1])->get();
		if(count($checkLogin1) >0)
		{
			session_start();
			$req->session()->put('name', $username);
			
			return view('admin.admin');
		}
		else if(count($checkLogin2)>0)
		{
			session_start();
			$req->session()->put('name', $username);
			return view('farmerdocupload');
		}
		else if(count($checkLogin3)>0)
		{
			session_start();
			$req->session()->put('name', $username);
			return view('buy');
			//echo "very good";
		}
		else{
			echo "failed";
		}*/
		
		
		session_start();
    $email = $request->input('email');
    $pass = $request->input('password');
    $a = Account::where('email',$email)->get();
    if ($a->count() == 0){
		
        return redirect('/')->with('alert', 'Wrong username/password');
    }
    foreach ($a as $object)
    {   if(!(($object->email)&&($object->password))){
            return redirect('/')->with('alert', 'Wrong username/password');
        }
        $id = $object -> id;
        if (($email == $object->email)&& (Hash::check($pass, $object->password)) ){
            session(['email' => $email,
                        'id' => $id]);
            $value = session('email');
            if($object->role == 1){
                $date=('Y-m-d');
                $date=date('Y-m-d');
                $far=DB::table('personals')->where('status','=',1)->get();
             $cat=DB::table('categories')->get();
             // $pro=DB::table('products')->get();
            
    $q=0;
    $crop=DB::table('cropregs')->where('email','!=','null')->where('expiration','>=',$date)->where('quantity','>',0)->get();
    $au=DB::table('auction_items')->where('status','new')->get();
    $au1=DB::table('biddings')->where('statuss',0)->get();
                return view('admin.admin',compact('far','cat','crop','au','au1'))->with('sess',$value);
            }
            if(($object->role==2)&&($object->status==1)){
               // $categories = DB::table("categories")->get();
               date_default_timezone_set('Asia/Kolkata');
        $date=('Y-m-d H:i:s');
        $date1=date('Y:m:d');
        $date2 = date('Y-m-d H:i:s'); 
        $date3=strtotime($date2);
        //  echo $date1;
               $data=DB::table('cropregs')
               ->join('reviews','reviews.cropid','=','cropregs.id')
               ->select('reviews.email','reviews.review','reviews.rate','cropregs.cropvariety')
               ->where('cropregs.email',$email)
               ->where('cropregs.expiration','>=',$date1)
               ->get();
               $data1=DB::table('categories')
               ->join('cropregs','categories.id','=','cropregs.cid')
               ->select('categories.name','cropregs.cropvariety','cropregs.expiration','cropregs.quantity','cropregs.value','cropregs.price','cropregs.image','cropregs.days','cropregs.description')
               ->where('cropregs.email',$email)
               ->get();
            //    echo $data;
                //echo $data1;
                $bid=DB::table('biddings')
                ->join('auctionpayment_controllers','auctionpayment_controllers.bidid','=','biddings.id')
                ->select('auctionpayment_controllers.paymentdate','auctionpayment_controllers.stat','biddings.id','biddings.memberid','biddings.amount','biddings.aid')
                ->where('biddings.memberid',$email)
                ->where('auctionpayment_controllers.paymentdate','>=',$date1)
                ->where('auctionpayment_controllers.stat','>=','not paid')
                
                ->get();
                $bid1=DB::table('biddings')
                ->join('auctionpayment_controllers','auctionpayment_controllers.bidid','=','biddings.id')
               
                ->where('biddings.memberid',$email)
                ->where('auctionpayment_controllers.paymentdate','>=',$date1)
                ->where('auctionpayment_controllers.stat','>=','not paid')
                ->select('biddings.aid')
                ->pluck('biddings.aid')
                ->first();
                $tool=DB::table('auction_items')->where('id',$bid1)->select('toolname')->pluck('toolname')->first();
                $au=DB::table('auction_items')->where('status','go to bid')->where('start','=',$date1)->get();
                $gggg=DB::table('messages')->where('status','paid')->where('email','=',$email)->get();
                
    $q=0;
    $data=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date1]);
        
    
     return view('farmer.farmerdocupload',compact('au','data','gggg','bid','tool'))->with('sess',$value);
    
                //echo "farmer";
               
            }
            if($object->role==3){
                $data=DB::table('cropregs')->where('expiration', '>=', date('Y-m-d'))->get();
                $cat=DB::table('categories')->get();
                return view('buy',compact('data','cat'))->with('sess',$value);
				//echo "customer";
            }
            if(!(($object->role==2)&&($object->status==1))){
                // $categories = DB::table("categories")->get();
                return redirect('/')->with('alert', 'Not Approved');
                 
                // return view('farmer.farmerdocupload')->with('sess',$value);
     
                 //echo "farmer";
                
             }

            

        }

        else{
            // return "Wrong UserName / Password";
            return redirect('/')->with('error', 'Wrong username/password');
        }
    }

    }
    public function login1(Request $request)
    {
		
        /*$username=$req->input('email');
	$password=$req->input('password');
		$checkLogin1=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>1,'online'=>0,'status'=>1])->get();
		$checkLogin2=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>2,'online'=>0,'status'=>0])->get();
		$checkLogin3=DB::table('accounts')->where(['username'=>$username,'password'=>$password,'role'=>3,'online'=>0,'status'=>1])->get();
		if(count($checkLogin1) >0)
		{
			session_start();
			$req->session()->put('name', $username);
			
			return view('admin.admin');
		}
		else if(count($checkLogin2)>0)
		{
			session_start();
			$req->session()->put('name', $username);
			return view('farmerdocupload');
		}
		else if(count($checkLogin3)>0)
		{
			session_start();
			$req->session()->put('name', $username);
			return view('buy');
			//echo "very good";
		}
		else{
			echo "failed";
		}*/
		
		
		session_start();
    $email = $request->input('email');
    $pass = $request->input('password');
    $a = Account::where('email',$email)->get();
    $mm=$request->input('bb');
    
    if ($a->count() == 0){
		
         return redirect('singlepage')->with('error', 'Wrong username/password');
     }
foreach ($a as $object)
     {   if(!(($object->email)&&($object->password))){
            return redirect('singlepage')->with('error', 'Wrong username/password');
         }
        $id = $object -> id;
       if (($email == $object->email)&& (Hash::check($pass, $object->password)) ){
            session(['email' => $email,
                        'id' => $id]);
            $value = session('email');
    // //         if($object->role == 1){
    // // $far=DB::table('personals')->get();
    // // $cat=DB::table('categories')->get();
    // // $pro=DB::table('products')->get();
    // // $crop=DB::table('cropregs')->get();
    // //             return view('admin.admin',compact('far','cat','pro','crop'))->with('sess',$value);
    // //         }
    //         // if(($object->role==2)&&($object->status==1)){
    //         //    // $categories = DB::table("categories")->get();
        
				
    //         //     return view('farmer.farmerdocupload')->with('sess',$value);
    
    //         //     //echo "farmer";
               
    //         // }
         if($object->role==3){
             // $data=DB::table('cropregs')->where('expiration', '>=', date('Y-m-d'))->get();
                 $data=DB::table('cropregs')->where('id',$mm)->get(); 
                
         $da=DB::table('cropregs')->where('id',$mm)->select('email')->pluck('email')->first();
       $data1=DB::table('personals')->where('email',$da)->get();
      
       $d=DB::table('personals')->where('email',$da)->select('did')->pluck('did')->first();
   $data2=DB::table('details')->where('id',$d)->get();
     
    //  return view('singlepage',compact('data','data1','data2'));
    $date=date('Y-m-d');
    $q=0;
    $crop=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
    $cat=DB::table('categories')->get();
    $caqua=DB::table('carts')->where('cropid',$id)->where('email',$email)->select('quantity1')->pluck('quantity1')->first();
                return view('singlepage1',compact('data','data1','data2','crop','cat','caqua'))->with('sess',$value);
	// 			//echo "customer";
          }
    //         // if(!(($object->role==2)&&($object->status==1))){
    //         //     // $categories = DB::table("categories")->get();
    //         //     return redirect('/')->with('error', 'Not Approved');
                 
    //         //     // return view('farmer.farmerdocupload')->with('sess',$value);
     
    //         //      //echo "farmer";
                
    //         //  }  


            

      

         else{
         // return "Wrong UserName / Password";
         return redirect('singlepage')->with('error', 'Wrong username/password');
        }
    }
    }
    }
    public function login2(Request $request)
    {
		
        
		
		
		session_start();
    $email = $request->input('email');
    $pass = $request->input('password');
    $a = Account::where('email',$email)->get();
    $mm=$request->input('bb');
    
    if ($a->count() == 0){
		
         return redirect('croppage')->with('success', 'Wrong username/password');
     }
foreach ($a as $object)
     {   if(!(($object->email)&&($object->password))){
            return redirect('croppage')->with('success', 'Wrong username/password');
         }
        $id = $object -> id;
       if (($email == $object->email)&& (Hash::check($pass, $object->password)) ){
            session(['email' => $email,
                        'id' => $id]);
            $value = session('email');
    
         if($object->role==3){
            $date=date('Y-m-d');
            $q=0;
            $data=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
            $cat=DB::table('categories')->get();
            return view('croppage1',compact('data','cat'))->with('sess',$value);
              
	
          }
    

            

      

         else{
         // return "Wrong UserName / Password";
         return redirect('croppage')->with('success', 'Wrong username/password');
        }
    }
    }
    }
public function logout(Request $req)
	
	{
        session_start();
        $val=$req->session()->get('email');
        // DB::delete('delete from carts where email = ?',[$val]);
		$req->session()->flush();
		session_destroy();
		return redirect('/');
	}
	
	
	
	
	
	
	
	
	
	
    /**
	
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
