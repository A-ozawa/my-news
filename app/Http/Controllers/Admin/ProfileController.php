<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    //以下追加
    public function add()
    {
        return view('admin.profile.create');
    }
        
    public function create(Request $request)    
    {
     //dd($request);   
        //$this->validate($request, Profile::$rules);

      $plofile = new Profile;
      $form = $request->all();

       // データベースに保存する
      $plofile->fill($form);
      $plofile->save(); 
       
        
        return redirect('admin/profile/create');
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
    public function sample()
    {
        return redirect('admin/profile/sample');
    }
}
