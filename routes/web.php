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
});

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
    return \App\User::all();
});
 