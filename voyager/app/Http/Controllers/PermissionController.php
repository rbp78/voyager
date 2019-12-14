<?php

namespace App\Http\Controllers;
use App\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
    	$permission = Permission:: select('*')->get()->where('table_name','like','categories');
    	//$permission = Permission:: select('table_name')->get();
    	return view('vista',compact('permission'));
    }
}
