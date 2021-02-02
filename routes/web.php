<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;


Route::get('/', function ()
{
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/index',function ()
{
    return view('admin_panel.index');
})->middleware('admin_auth');


Route::get('user/error',function ()
{
    return view('user.errors.notAdmin');
});


Route::resource('admin/user','admin\UserController');

/*
| Domain | Method    | URI                           | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/user                    | user.index            | App\Http\Controllers\admin\UserController@index               | web,admin_auth
|        | POST      | admin/user                    | user.store            | App\Http\Controllers\admin\UserController@store               | web,admin_auth
|        | GET|HEAD  | admin/user/create             | user.create           | App\Http\Controllers\admin\UserController@create              | web,admin_auth
|        | GET|HEAD  | admin/user/{user}             | user.show             | App\Http\Controllers\admin\UserController@show                | web,admin_auth
|        | PUT|PATCH | admin/user/{user}             | user.update           | App\Http\Controllers\admin\UserController@update              | web,admin_auth
|        | DELETE    | admin/user/{user}             | user.destroy          | App\Http\Controllers\admin\UserController@destroy             | web,admin_auth
|        | GET|HEAD  | admin/user/{user}/edit        | user.edit             | App\Http\Controllers\admin\UserController@edit                | web,admin_auth

 */
Route::resource('admin/borrow','admin\BorrowController');

/*
| Domain | Method    | URI                           | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/borrow                  | borrow.index          | App\Http\Controllers\admin\BorrowController@index             | web,admin_auth
|        | POST      | admin/borrow                  | borrow.store          | App\Http\Controllers\admin\BorrowController@store             | web,admin_auth
|        | GET|HEAD  | admin/borrow/create           | borrow.create         | App\Http\Controllers\admin\BorrowController@create            | web,admin_auth
|        | GET|HEAD  | admin/borrow/{borrow}         | borrow.show           | App\Http\Controllers\admin\BorrowController@show              | web,admin_auth
|        | PUT|PATCH | admin/borrow/{borrow}         | borrow.update         | App\Http\Controllers\admin\BorrowController@update            | web,admin_auth
|        | DELETE    | admin/borrow/{borrow}         | borrow.destroy        | App\Http\Controllers\admin\BorrowController@destroy           | web,admin_auth
|        | GET|HEAD  | admin/borrow/{borrow}/edit    | borrow.edit           | App\Http\Controllers\admin\BorrowController@edit              | web,admin_auth
 */

Route::resource('admin/item','admin\ItemController');
/*
| Domain | Method    | URI                           | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/item                    | item.index            | App\Http\Controllers\admin\ItemController@index               | web,admin_auth
|        | POST      | admin/item                    | item.store            | App\Http\Controllers\admin\ItemController@store               | web,admin_auth
|        | GET|HEAD  | admin/item/create             | item.create           | App\Http\Controllers\admin\ItemController@create              | web,admin_auth
|        | GET|HEAD  | admin/item/{item}             | item.show             | App\Http\Controllers\admin\ItemController@show                | web,admin_auth
|        | PUT|PATCH | admin/item/{item}             | item.update           | App\Http\Controllers\admin\ItemController@update              | web,admin_auth
|        | DELETE    | admin/item/{item}             | item.destroy          | App\Http\Controllers\admin\ItemController@destroy             | web,admin_auth
|        | GET|HEAD  | admin/item/{item}/edit        | item.edit             | App\Http\Controllers\admin\ItemController@edit                | web,admin_auth
 */

Route::resource('admin/item_type','admin\Item_TypeController');
/*
| Domain | Method    | URI                              | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/item_type                  | item_type.index       | App\Http\Controllers\admin\Item_TypeController@index          | web,admin_auth
|        | POST      | admin/item_type                  | item_type.store       | App\Http\Controllers\admin\Item_TypeController@store          | web,admin_auth
|        | GET|HEAD  | admin/item_type/create           | item_type.create      | App\Http\Controllers\admin\Item_TypeController@create         | web,admin_auth
|        | GET|HEAD  | admin/item_type/{item_type}      | item_type.show        | App\Http\Controllers\admin\Item_TypeController@show           | web,admin_auth
|        | PUT|PATCH | admin/item_type/{item_type}      | item_type.update      | App\Http\Controllers\admin\Item_TypeController@update         | web,admin_auth
|        | DELETE    | admin/item_type/{item_type}      | item_type.destroy     | App\Http\Controllers\admin\Item_TypeController@destroy        | web,admin_auth
|        | GET|HEAD  | admin/item_type/{item_type}/edit | item_type.edit        | App\Http\Controllers\admin\Item_TypeController@edit           | web,admin_auth
 */


Route::resource('admin/author','admin\AuthorController');
/*
| Domain | Method    | URI                           | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/author                  | author.index          | App\Http\Controllers\admin\AuthorController@index             | web,admin_auth
|        | POST      | admin/author                  | author.store          | App\Http\Controllers\admin\AuthorController@store             | web,admin_auth
|        | GET|HEAD  | admin/author/create           | author.create         | App\Http\Controllers\admin\AuthorController@create            | web,admin_auth
|        | GET|HEAD  | admin/author/{author}         | author.show           | App\Http\Controllers\admin\AuthorController@show              | web,admin_auth
|        | PUT|PATCH | admin/author/{author}         | author.update         | App\Http\Controllers\admin\AuthorController@update            | web,admin_auth
|        | DELETE    | admin/author/{author}         | author.destroy        | App\Http\Controllers\admin\AuthorController@destroy           | web,admin_auth
|        | GET|HEAD  | admin/author/{author}/edit    | author.edit           | App\Http\Controllers\admin\AuthorController@edit              | web,admin_auth
 */

Route::resource('admin/maintainer','admin\MaintainerController');
/*
| Domain | Method    | URI                                | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/maintainer                   | maintainer.index      | App\Http\Controllers\admin\MaintainerController@index         | web,admin_auth
|        | POST      | admin/maintainer                   | maintainer.store      | App\Http\Controllers\admin\MaintainerController@store         | web,admin_auth
|        | GET|HEAD  | admin/maintainer/create            | maintainer.create     | App\Http\Controllers\admin\MaintainerController@create        | web,admin_auth
|        | GET|HEAD  | admin/maintainer/{maintainer}      | maintainer.show       | App\Http\Controllers\admin\MaintainerController@show          | web,admin_auth
|        | PUT|PATCH | admin/maintainer/{maintainer}      | maintainer.update     | App\Http\Controllers\admin\MaintainerController@update        | web,admin_auth
|        | DELETE    | admin/maintainer/{maintainer}      | maintainer.destroy    | App\Http\Controllers\admin\MaintainerController@destroy       | web,admin_auth
|        | GET|HEAD  | admin/maintainer/{maintainer}/edit | maintainer.edit       | App\Http\Controllers\admin\MaintainerController@edit          | web,admin_auth

 */

Route::resource('admin/subject','admin\SubjectController');
/*
| Domain | Method    | URI                           | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/subject                 | subject.index         | App\Http\Controllers\admin\SubjectController@index            | web,admin_auth
|        | POST      | admin/subject                 | subject.store         | App\Http\Controllers\admin\SubjectController@store            | web,admin_auth
|        | GET|HEAD  | admin/subject/create          | subject.create        | App\Http\Controllers\admin\SubjectController@create           | web,admin_auth
|        | GET|HEAD  | admin/subject/{subject}       | subject.show          | App\Http\Controllers\admin\SubjectController@show             | web,admin_auth
|        | PUT|PATCH | admin/subject/{subject}       | subject.update        | App\Http\Controllers\admin\SubjectController@update           | web,admin_auth
|        | DELETE    | admin/subject/{subject}       | subject.destroy       | App\Http\Controllers\admin\SubjectController@destroy          | web,admin_auth
|        | GET|HEAD  | admin/subject/{subject}/edit  | subject.edit          | App\Http\Controllers\admin\SubjectController@edit             | web,admin_auth
 */
Route::resource('admin/academic_year','admin\Academic_YearController');
/*
| Domain | Method    | URI                                      | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/academic_year                      | academic_year.index   | App\Http\Controllers\admin\Academic_YearController@index      | web,admin_auth
|        | POST      | admin/academic_year                      | academic_year.store   | App\Http\Controllers\admin\Academic_YearController@store      | web,admin_auth
|        | GET|HEAD  | admin/academic_year/create               | academic_year.create  | App\Http\Controllers\admin\Academic_YearController@create     | web,admin_auth
|        | GET|HEAD  | admin/academic_year/{academic_year}      | academic_year.show    | App\Http\Controllers\admin\Academic_YearController@show       | web,admin_auth
|        | PUT|PATCH | admin/academic_year/{academic_year}      | academic_year.update  | App\Http\Controllers\admin\Academic_YearController@update     | web,admin_auth
|        | DELETE    | admin/academic_year/{academic_year}      | academic_year.destroy | App\Http\Controllers\admin\Academic_YearController@destroy    | web,admin_auth
|        | GET|HEAD  | admin/academic_year/{academic_year}/edit | academic_year.edit    | App\Http\Controllers\admin\Academic_YearController@edit       | web,admin_auth

 */
Route::resource('admin/specialize','admin\SpecializeController');

/*
| Domain | Method    | URI                                | Name                  | Action                                                        | Middleware
|        | GET|HEAD  | admin/specialize                   | specialize.index      | App\Http\Controllers\admin\SpecializeController@index         | web,admin_auth
|        | POST      | admin/specialize                   | specialize.store      | App\Http\Controllers\admin\SpecializeController@store         | web,admin_auth
|        | GET|HEAD  | admin/specialize/create            | specialize.create     | App\Http\Controllers\admin\SpecializeController@create        | web,admin_auth
|        | GET|HEAD  | admin/specialize/{specialize}      | specialize.show       | App\Http\Controllers\admin\SpecializeController@show          | web,admin_auth
|        | PUT|PATCH | admin/specialize/{specialize}      | specialize.update     | App\Http\Controllers\admin\SpecializeController@update        | web,admin_auth
|        | DELETE    | admin/specialize/{specialize}      | specialize.destroy    | App\Http\Controllers\admin\SpecializeController@destroy       | web,admin_auth
|        | GET|HEAD  | admin/specialize/{specialize}/edit | specialize.edit       | App\Http\Controllers\admin\SpecializeController@edit          | web,admin_auth
 */
