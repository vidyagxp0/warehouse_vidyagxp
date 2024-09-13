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

    public  function product_planning()
    {
        $pageTitle  = 'Production Planning';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.production_planning.product_planning',compact('pageTitle'));
    }

    public  function receiving()
    {
        $pageTitle  = 'Receiving';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.Receiving.receiving',compact('pageTitle'));
    }

    public  function storage()
    {
        $pageTitle  = 'Storage';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.storage.storage',compact('pageTitle'));
    }

    public  function inventory_management()
    {
        $pageTitle  = 'Inventory Management';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.inventorymanagement.inventory_management',compact('pageTitle'));
    }

    public  function picking()
    {
        $pageTitle  = 'Picking';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.picking.picking',compact('pageTitle'));
    }

    public  function sampling()
    {
        $pageTitle  = 'Sampling';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.sampling.sampling',compact('pageTitle'));
    }

    public  function ipqa()
    {
        $pageTitle  = 'IPQA';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.IPQA.ipqa',compact('pageTitle'));
    }

    public  function analysis()
    {
        $pageTitle  = 'Analysis';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.analysis.analysis',compact('pageTitle'));
    }

    public  function packing()
    {
        $pageTitle  = 'Packing';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.packing.packing',compact('pageTitle'));
    }

    public  function despatch()
    {
        $pageTitle  = 'Despatch';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.despatch.despatch',compact('pageTitle'));
    }

    public  function weighing_dispensing()
    {
        $pageTitle  = 'Weighing and Dispensing';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.general_first.general_information',compact('pageTitle'));
    }

    public  function weighing_general_info()
    {
        $pageTitle  = 'calibration of Weighing Balance';
        $newexpMaterial = AVL::all();
        // return "test";
        return view('admin.general_second.general_infromation_two',compact('pageTitle'));
    }


}
