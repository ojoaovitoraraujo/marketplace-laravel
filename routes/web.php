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
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
})->name('home');

Route::get('/model', function () {
    //$products = \App\Product::all(); //select * from products

    // $user = new \App\User();
    // $user->name='Usuário Teste';
    // $user->email='email@teste.com';
    // $user->password=bcrypt('123456789');
    // $user->save();

    //return \App\User::all(); //Collection - Retorna todos os usuários
    //return \App\User::find(3); // Retorna o usuário com base no ID
    // return \App\User::where('name', 'Franz Kerluke I')->get(); // Equivale a => select * from users  where name = 'Franz Kerluke I'
    // return \App\User::paginate(10); //Retorna todos os usuários com paginação


    //Mass Assignment - Atribuição em Massa 
    // $user = \App\User::create([
    //     'name'=>'João Vitor Oliveira',
    //     'email'=>'jv.oliveraraujo@gmail.com',
    //     'password'=>bcrypt('1234567'),
    // ]);
    // dd($user);

    //Mass Update
    // $user = \App\User::find(41);
    // $user->update([
    //     'name' => 'João Vitor Oliveira Araujo'
    // ]);
    // dd($user);

    //$user = \App\User::find(4);
    
    //dd($user->store()->count()); //Retorna o objeto unico(store) 

    //Como pegar os produtos de uma loja ?
    //$loja = \App\Store::find(1);
    //return $loja->products;  |  $loja->products()->where('id', 9)->get()


    // Como pegar as categorias de uma loja ?
    //$categoria = \App\Category::all();
    //$categoria->products;





    //Criar uma loja para um usuário
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name'=> 'Loja teste',
    //     'description'=> 'Loja teste de produtos de informática',
    //     'phone'=> 'XX-XXXX-XXXX',
    //     'mobile_phone'=> 'XX-XXXX-XXXX',
    //     'slug'=>'loja-teste'
    // ]);

    // dd($store);


    //Criar um produto para uma loja
    // $store = \App\Store::find(41);
    // $product = $store->products()->create([
    //     'name' => 'notebook',
    //     'description' => 'é isso',
    //     'body' => 'uhul ae',
    //     'price' => 10.8,
    //     'slug' => 'tchurabirao'
    // ]);

    // dd($product);

    //Criar uma categoria

    // \App\Category::create([
    //     'name' => 'Games',
    //     'description' => null,
    //     'slug' => 'games'
    // ]);

    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'description' => 'teste um dois',
    //     'slug' => 'notebooks'
    // ]);


    // return \App\Category::all();

    //Adicionar um produto para uma categoria
    $product = \App\Product::find(35);

    // dd($product->categories()->attach([1])); //detach para remover
    dd($product->categories()->sync([1,2]));




    return \App\User::all();
});
 
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('admin')->group(function(){

        // Route::prefix('stores')->name('stores.')->group(function(){
        //     Route::get('/', 'StoreController@index')->name('index');
        //     Route::get('/create', 'StoreController@create')->name('create');
        //     Route::post('/store', 'StoreController@store')->name('store');
        //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        //     Route::post('/update/{store}', 'StoreController@update')->name('update');
        //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        // });
    
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');

        Route::post('photos/remove', 'ProductPhotoController@removePhoto')->name('photo.remove');
        
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
