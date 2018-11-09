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
    return view('welcome');
});

Route::get('/products',function(){
     return view('produts');
});
Route::get('/services',function(){
     return view('services');
});
Route::get('/contacts',function(){
     return view('contacts');
});
Route::get('/home',function (){
  return view('welcome');
});









// Route::get('/productdetails',function (){
//   return view('user.customer.productdetails');
// });

// Route::get('/feedback',function (){
//   return view('user.customer.feedback');
// });

// Route::get('/assign',function (){
//   return view('user.supervisor.assign');
// });






/*Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/logout','AdminController@logout');

//Route::group(['middleware'=>['auth']],function ()
//{
  //Route::get('/admin/dashboard','AdminController@dashboard');
//});

*/
Route::match(['get','post'],'/user','UsesController@log');
Route::match(['get','post'],'/regcustomer','RegisterController@custregister');




Route::group(['middleware'=>['auth']],function ()
{
  Route::get('/user/userdash','UsesController@dashboard');
  Route::get('/user/useropedash','UsesController@opdashboard');
  Route::get('/user/usercustomer','UsesController@customerdashboard');
  Route::get('/user/usersupvisor','UsesController@supervisordashboard');
  Route::get('/user/user_technician','UsesController@techniciandashboard');

 

  Route::match(['get','post'],'/complain','ComplainController@makecomplain');
  Route::match(['get','post'],'/viewcomplain','ComplainController@viewcomplain');

  Route::match(['get','post'],'/assign','ComplainController@assign');


  Route::match(['get','post'],'/maintenance','UsesController@maintenance');
  Route::match(['get','post'],'/productdetails','UsesController@productdetails');
  Route::match(['get','post'],'/feedback','UsesController@feedback');
  





  Route::match(['get','post'],'/custregoperator','RegisterController@custopregister');

  Route::match(['get','post'],'/addjoboperator','ComplainController@makecomplainoperator');

  Route::match(['get','post'],'/addproducts','UsesController@addproducts');

  Route::match(['get','post'],'/estimateopr','UsesController@estimateopr');





  Route::match(['get','post'],'/employreg','RegisterController@employregister');








});

Route::get('/logout','UsesController@logout');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
