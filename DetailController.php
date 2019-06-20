<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;
use DB;
use App\ Doc;
use App\Personal;
use App\creg;
use Hash;
class DetailController extends Controller
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
	public function photo(Request $req)
    {
		$val=$req->session()->get('email');
		$id=$req->input('id');
		$file=$req->photo->getClientOriginalName();
		$req->photo->storeAs('public/upload',$file);
		DB::table('personals')->where('did',$id)->update(array(
			'image'=>$file,
)); 
return redirect()->back()->with('sess',$val);
    }
	public function profile(Request $req)
    {
       $val=$req->session()->get('email');
	   //echo  $val;
	   
	   $data=DB::table('details')
	   ->join('personals','personals.did','=','details.id')
	  ->select('personals.fname','personals.lname','personals.email','personals.ph','personals.image','details.housename','details.country','details.state','details.district','details.panchayath','details.pin','personals.did')
	  ->where('personals.email',$val)
	  ->get();
	  //dd($user);
	  return view('farmerprofile',compact('data'));
	}
	
	public function profile1(Request $req)
    {
       $val=$req->session()->get('email');
	   //echo  $val;
	   $data=DB::table('details')
	  ->join('personals','personals.did','=','details.id')
	  ->select('personals.did','personals.fname','personals.lname','personals.email','personals.ph','personals.image','details.housename','details.country','details.state','details.district','details.panchayath','details.pin')
	  ->where('personals.email',$val)
	  ->get();
	  return view('farmerprofile1',compact('data'));
	}
	public function profileedit(Request $req)
    {
		$val=$req->session()->get('name');
		$n=		$req->input('bb');
// $file=$req->pic->getClientOriginalName();
// 		$req->pic->storeAs('public/upload',$file);	
		$name=$req->input('fn');
		$umob=$req->input('ln');
		$uhname=$req->input('e');
		$upost=$req->input('p');
		$name1=$req->input('h');
		
		/*$umob1=$req->input('c');
		$uhname1=$req->input('s');
		$upost1=$req->input('d');
		$uhname2=$req->input('pa');
		$upost2=$req->input('pi');*/
		
		DB::table('personals')->where('email',$val)->update(array(
                                 'fname'=>$name,'lname'=>$umob,'ph'=>$upost,
)); 
DB::table('details')->where('id',$n)->update(array(
                                 'housename'=>$name1,
)); 
		return view('farmer.farmerdocupload');
    }
      
	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       //echo "hai";
        $uname=$req->input('email');
		$check=DB::table('accounts')->where(['email'=>$uname])->get();
		$pwd1=$req->input('password');
		
		    $conpwd=$req->input('cpassword');
		if(count($check)==0)
        { 
	if ($pwd1==$conpwd)
		             { 
				 $pwd = Hash::make($req->input('password'));
			$users=new Detail([
			'housename'=>$req->get('hname'),
			
			'country'=>$req->get('country'),
			'state'=>$req->get('state'),
			'district'=>$req->get('district'),
			'panchayath'=>$req->get('pan'),
			'pin'=>$req->get('pin'),
			
			]);
            $users->save();
			$one=$req->get('fname');
			$two=$req->get('lname');
			$three=$req->get('email');
			$four=$req->get('phone');
			$five=Detail::max('id');
			$file=	   $req->pic->getClientOriginalName();
		$req->pic->storeAs('public/upload',$file);	
			
	        
			$result=DB::insert("insert into personals(fname,lname,email,ph,did,image,status) values(?,?,?,?,?,?,?)",[$one,$two,$three,$four,$five,$file,0]);
			
					 
					             
					     $result1=DB::insert("insert into accounts(email,password,role,status)values(?,?,?,?)",[$uname,$pwd,2,0]);
					     //return view('index2');
						 //echo "hai";
						 $filename1=	   $req->img1->getClientOriginalName();
						 $req->img1->storeAs('public/upload',$filename1);
						 $filename2=	   $req->img2->getClientOriginalName();
							 $req->img2->storeAs('public/upload',$filename2);
							 $filename3=	   $req->img3->getClientOriginalName();
									$req->img3->storeAs('public/upload',$filename3);
							 
							 $filename4=	   $req->img4->getClientOriginalName();
							 $req->img4->storeAs('public/upload',$filename4);
							 $val=$uname;
							 $file8=new Doc;
							$file8->email=$val;
							$file8->aadharcard= $filename1;
							$file8->taxreceipt= $filename2;
							$file8->plan= $filename3;
							$file8->aaharam= $filename4;
							$file8-> save();








						 return redirect()->back()->with('alert','successfully Registred');
		             }  
                     else
                     {
						return redirect()->back()->with('alert','password doesnot match.Registration not completed');
						 //return view('regg');
						  //echo "hai";
					 }	
					 	
		}	
		else
		{
						
			// return redirect()->to($this->getRedirectUrl())
            //       ->withInput($req->input())
            //      ->withErrors('email', $this->errorBag());
			//return redirect()->back()->with('alert','email already Exist. Registration not completed');
						 
						 //return redirect('/already');
						 return redirect()->back()->withInput();
		}	
			
			
			
    }
    
public function store1(Request $req)
    {
       //echo "hai";
		$uname=$req->input('email');
		// echo $uname;
		$name=$req->input('firstname');
		$check=DB::table('accounts')->where(['email'=>$uname])->get();
		$pwd1=$req->input('password');
		
		$conpwd=$req->input('cpassword');
					 
		if(count($check)==0)
        {
			if ($pwd1==$conpwd)
		             {
						 $pwd = Hash::make($req->input('password'));
			// $users=new creg([
			// 'name'=>$req->get('firstname'),
			// 'addr'=>'null',
			
			
			// 'pin'=>0,
			// 'ph'=>0,
			// 'email'=>$uname,
			// 'addtype'=>'null'
			// ]);
			// // $users->save();
			$result2=DB::insert("insert into cregs(name,addr,pin,ph,email,addtype)values(?,?,?,?,?,?)",[$name,'null',0,0,$uname,'null']);
			
			
					               
			     $result1=DB::insert("insert into accounts(email,password,role,status)values(?,?,?,?)",[$uname,$pwd,3,1]);
					     //return view('index2');
				
						 return redirect()->back()->with('alert','successfully added');
		             }  
                     else
                     {
					 return redirect()->back()->with('alert','password doesnot match.Registration not completed');
						 //return view('regg');
						  //echo "hai";
					 }	
					 	
		}	
		else
		{
			// return redirect()->to($this->getRedirectUrl())
            //         ->withInput($req->input())
            //         ->withErrors('email', $this->errorBag());			
		return redirect()->back()->with('alert','email already Exist.Registration not completed');
			//return redirect()->back()->withInput();		 
						 //return redirect('/already');
		}	
			
			
			
    }
    public function farmer()
    {
      //echo "hallo
	  $data=DB::table('details')
	  ->join('personals','personals.did','=','details.id')
	  ->select('personals.fname','personals.lname','personals.email','personals.ph','details.housename','details.country','details.state','details.district','details.panchayath','details.pin')
	  ->get();
	 
	 // echo"<pre>";
	  
	  
	  //print_r($data);
	  
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
	 
     */
	 
	
	 
	 
	 
	 
    public function edit(Detail $detail,$id)
	
    {
		$val= $id;
		$data=DB::table('docs')
		->join('personals','personals.email','=','docs.email')
		->select('docs.email','docs.aadharcard','docs.taxreceipt','docs.plan','docs.aaharam')
		->where(['personals.status'=>0,'docs.email'=>$val])
		->get();
		$date=date('Y-m-d');
		$far=DB::table('personals')->where('status','=',1)->get();
	 $cat=DB::table('categories')->get();
	 // $pro=DB::table('products')->get();
	 $crop=DB::table('cropregs')->where('email','!=','null')->where('expiration','>=',$date)->where('quantity','>',0)->get();
	
		//$check=DB::table('docs')->where(['email'=>$val])->get();
			//$data=DB::table('docs')->where(['email'=>$val])->get();
			$count=count($data);
			return view('docdisplay',compact('data','count','far','cat','pro','crop'));
		 /*	if(count($check)>0)
		{
		
		}
		else
		{
			return redirect('/newfs')->with('alert','Sorry no data');
		}
      DB::table('arcticians')->where('id',$id)->update(array(
                                 'ustatus'=>1,)); 
return redirect('/arc');*/

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
