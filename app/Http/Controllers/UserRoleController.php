<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function store(Request $request)
    {
    $inputValue = $request->all();

    $request->validate([
        'role_id' => 'required|max:10',
        'status_role' => 'required',
    ]);

echo $request->input('status_role');
exit();
    
    $succsess = user_roles::create($inputValue);
    if($succsess){
        Session::flash('status','success');
    }else{
        Session::flash('error','ada kesalahan');
    }
    return redirect()->back();
         
        
    }
}
