<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create()
    {
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.profile.create');
    }
    
    public function update()
    {
        return redirect('admin/profile/create');
    }
}

//admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください
Route::group(['prefix' => 'admin'],function(){
    Route::get('profile/create',
'Admin\ProfileController@add');
    Route::get('profile/edit',
'Admin\ProfileController@edit');
});