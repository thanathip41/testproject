<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminRoleController extends Controller
{
    public function index()
    {
        $users = User::all(); 
       // dd($users);
        return view('user.changeRole', compact('users')); 
    }
    public function update(Request $request, $id)
    {   
        $this->validate($request, 
        [ 
          
          'roleCheck'=>'required',
          
        ]); 
        $changeRole = User::find($id); 
        $changeRole->roleCheck = $request->get('roleCheck');
        $changeRole->save(); 
        return back()->with('success', 'บันทึกข้อมูลเรียบร้อย'); 
    }
}
