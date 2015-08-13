<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Módulo 1 e 2
Route::get('exemplo', 'WelcomeController@exemplo');

//Módulo 2
Route::get('admin/categories','AdminCategoriesController@index');
//Route::get('admin/products','AdminProductsController@index');

Route::get('home', 'HomeController@index');

//Modulo 3
//get('admin/products','AdminProductsController@index');
//get('/exemplo2',function(){
 //   return 'Oi';
//});
//post('/exemplo2',function(){
//    return 'Oi';
//});
/*//Lista os verbos http
Route::match(['get','post'],'/exemplo2', function(){
    return 'Oi';
});
//Lista qualquer verbo http
Route::any('/exemplo2',function(){
    return 'Olá';
});
//Get com parametros
Route::get('user/{id}',function($id){
    return "Olá $id";
});
//Get com parametros e condicionais
Route::get('user/{id?}',function($id = null){
    if($id)
        return "Olá $id";
    return "Não possui ID";
});

//Get com parametros e condicionais com default value
Route::get('user/{id?}',function($id = "Tiago"){
    if($id)
        return "Olá $id";
    return "Não possui ID";
});*/

////Get com parametros e condicionais com Constraint (ex: ID deve ser sempre numerico)
//Route::get('user/{id?}',function($id = 123){
//    if($id)
//        return "Olá $id";
//    return "Não possui ID";
//})->where('id','[0-9]+'); //deve ser numerico e possuir ao menos 1 dígito

//Get com parametros e condicionais com Constraint (ex: ID deve ser sempre letra)
/*Route::get('user/{id?}',function($id = 123){
    if($id)
        return "Olá $id";
    return "Não possui ID";
})->where('id','[A-Za-z]+'); //deve ser numerico e possuir ao menos 1 dígito*/

//Get com parametros e condicionais com Constraint em um Pattern(ex: ID deve ser sempre numerico)
//Route::pattern('id','[0-9]+');
//Route::get('user/{id?}',function($id = 123){
//    if($id)
//        return "Olá $id";
//    return "Não possui ID";
//}); //deve ser numerico e possuir ao menos 1 dígito


//Named Routes
Route::get('produtos-legais',['as'=>'produtos', function(){
    echo Route::currentRouteName();
    //return "Produtos";
}]);
//Helpers
//redirect()->route('produtos');
//echo route('produtos');die;

//Grouped Routes
/*Route::group(['prefix'=>'admin'],function(){
    Route::get('products',function(){
        return "Produtos";
    });
});

Route::group(['namespace'=>'App'],function(){
    Route::get('products',function(){
        return "Produtos";
    });
});

Route::group(['middleware'=>'admin|exemk|xpto'],function(){
    Route::get('products',function(){
        return "Produtos";
    });
});*/

//Route Model Binding - passar para a rota um model
Route::get('category/{category}',function(\CodeCommerce\Category $category){
    //Em providers/RouteServiceProvider.php no Metodo Boot foi adicionada uma linha que especifica q ao receber {category},
    //o framework vai transformar em objeto.
    return $category->name;

});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    //'admin' => 'Admin\AdminCategoriesController'
]);
