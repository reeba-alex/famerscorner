<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $data=DB::table('cropregs')->where('expiration', '>=', date('Y-m-d'))->get();
    $date=date('Y-m-d');
    $q=0;
    $data=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
    $data1=DB::table('categories')->get();
    $states = DB::table("countries")->pluck("name","id");
    return view('index2',compact('data','data1','states'));
    
});
Route::get('/farmer', function () {
    $date=date('Y-m-d');
    $val=$req->session()->get('email');
    $au=DB::table('auctions')->where('status','go to bid')->where('end','>=',$date)->get();
    $gggg=DB::table('messages')->where('status','paid')->where('email','=',$val)->get();
$q=0;
$data=DB::select('select * from cropregs where expiration >= ? and quantity > 0',[$date]);
    return view('farmer.farmerdocupload',compact('au','data','gggg'))->with('sess',$value);
    
});

Route::get('/loginme', function () {
    return view('admin.admin');
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/loginme', 'LoginController@login')->name('home');
Route::post('/loginme1', 'LoginController@login1')->name('home');
Route::post('/loginme2', 'LoginController@login2')->name('home');
Route::get('/loginn', 'LoginController@loginn'); 
Route::get('/file', 'RegisterController@index'); 
Route::get('/regg', 'RegisterController@reg'); 
Route::post('/file1', 'RegisterController@storefile');
//Route::get('/newfarmer', 'RegisterController@index');
Route::get('get-pan-list', 'RegisterController@getPanList');
Route::get('/log', 'LoginController@logout');  
Route::post('/data', 'DetailController@store');  
Route::post('/data1', 'DetailController@store1');  
Route::get('/home1', 'LoginController@index')->name('home');
Route::get('/buy', 'RegisterController@buyy');
Route::get('/gallery', 'RegisterController@galleryy');
Route::get('/about', 'RegisterController@aboutt');
Route::get('/adminh', 'RegisterController@adminho');
Route::get('/farmer', 'RegisterController@farmerho');
//Route::get('/newfarmer', 'DetailController@farmer');
Route::get('/myprofile', 'DetailController@profile');
Route::post('/newfs', 'RegisterController@newfas');
Route::post('/pro', 'DetailController@profile1');
Route::post('/proedit', 'DetailController@profileedit');
Route::match(['GET','post'],'check', 'RegisterController@check');
Route::post('/book', 'DetailController@profileedit'); 
//Route::resource('/book', 'DetailController');
Route::get('/docupload', 'RegisterController@doc');
Route::get('/kk', 'RegisterController@doccc');
Route::get('/kk1', function () {
    return view('index2');
    
});
Route::resource('/arc1', 'DetailController');
Route::resource('/arc', 'RegisterController');
Route::resource('/arcc', 'LoginController');
Route::get('/cat', function () {
    return view('admin/index');
    
});
Route::get('/category', 'CategoryController@index');
Route::get('/category3', 'CategoryController@view');
Route::post('/category4', 'CategoryController@store');
Route::resource('/category1', 'CategoryController');
Route::resource('/category5', 'CategoryController');
Route::post('/category6', 'CategoryController@update1');

Route::get('/category2/{id}', 'CategoryController@destroy');
Route::get('/newfarmer','DropdownController@index');
Route::get('get-state-list','DropdownController@getStateList');
Route::get('/addproduct','ProductController@index');
Route::resource('/addproduct1', 'ProductController');
Route::get('/regproduct', 'ProductController@regproduct1');
Route::post('/addproduct2', 'ProductController@store');
Route::resource('/regproduct2', 'PersonalController');
Route::resource('/regproduct3', 'LogoutController');
Route::post('/store', 'LogoutController@store');
Route::post('/cropstore', 'CropregController@store');
//Route::any('/','DropdownController@index');
Route::get('/send','MailController@index');
Route::post('/send/email','MailController@sendemail');
Route::get('/shopnow', 'RegisterController@shopnow');
Route::resource('/buy1', 'RegisterController');
Route::resource('/buy2', 'MailController');
Route::resource('/buy3', 'CregController');
Route::resource('/buy4', 'CropregController');
// Route::resource('/cart','CartController');
Route::get('/cartview', 'CartController@view');
Route::resource('/cartedit', 'CartController');
Route::resource('/cadel', 'CartController');
Route::resource('/caedit', 'PaymentController');
Route::resource('/cabuy', 'BankController');
// Route::get('/categoryview', 'DocController');
Route::get('/categoryview2', 'CropregController@categoryview2');

Route::resource('/checkout', 'CheckoutController');
Route::post('/addcart', 'CartController@add');
Route::post('/payment', 'CartController@index');
Route::post('/address', 'CartController@reg');
Route::resource('/pay', 'CartController');
Route::post('/bank', 'CartController@payment');
Route::post('/cash', 'PaymentController@index');
Route::resource('/payment1', 'Payment1Controller');
Route::resource('/payment2', 'Payment2Controller');
Route::post('/cartedit', 'Payment2Controller@index');
Route::post('/review', 'ReviewController@index');
Route::post('/prophoto', 'DetailController@photo');
Route::get('/viewproduct', 'PaymentController@productview');
Route::resource('/editcrop', 'ReviewController');
Route::post('/cropupdate', 'ReviewController@update');
Route::resource('/delcrop', 'CropController');
Route::get('/viewreview', 'CropController@index');
Route::get('/vieworder', 'CropController@order');
Route::get('/regauction', 'CropController@auction');
Route::post('/auctionstore', 'CropController@store');
Route::resource('/aude', 'AuctionController');
Route::post('/auctionedit', 'AuctionController@update');
Route::resource('/paid', 'PaidController');
Route::get('/disapprove', 'PaidController@index');
Route::resource('/dis', 'DisController');
Route::get('/croin', 'DisController@index');
Route::resource('/parau', 'ParticipateController');
Route::get('/running', 'ParticipateController@runningauction');
Route::post('/subau', 'ParticipateController@update');
Route::resource('/bidd', 'MessageController');
Route::post('/gobid', 'MessageController@update');
Route::resource('/p', 'LmnController');
Route::resource('/see', 'BiddingController');
Route::resource('/stop', 'EditController');
Route::resource('/aupay', 'Edit1Controller');
Route::post('/proceed', 'EditController@update');
Route::get('/managetool', 'EditController@index');
Route::resource('/aupayment', 'Edit2Controller');
Route::post('/cre', 'CreditController@update');
Route::resource('/delivered', 'AucreController');