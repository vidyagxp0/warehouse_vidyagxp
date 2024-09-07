<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AVL;
use Illuminate\Http\Request;

class AvlLController extends Controller
{
    public  function index()
    {
        $pageTitle  = 'AVL';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.avl.index',compact('pageTitle'));
    }
}
