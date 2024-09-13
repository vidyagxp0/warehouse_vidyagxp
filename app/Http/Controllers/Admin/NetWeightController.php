<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Netweight;
use Illuminate\Http\Request;

class NetWeightController extends Controller
{
 public function net_weight()
{
    $pageTitle  = 'Production Planning';
    $newProd_planning = Netweight::all();

    $material_grid = Netweight::where(['identifier' => 'details'])->get()->map(function ($item) {
        $item->data = json_decode($item->data, true);
        return $item;
    });
    

    $grn_grid = Netweight::where(['identifier' => 'grn_info'])->get()->map(function ($item) {
        $item->data = json_decode($item->data, true);
        return $item;
    });

    $weighieng_grid = Netweight::where(['identifier' => 'weighting_info'])->get()->map(function ($item) {
        $item->data = json_decode($item->data, true);
        return $item;
    });

    $quality_grid = Netweight::where(['identifier' => 'quality_control'])->get()->map(function ($item) {
        $item->data = json_decode($item->data, true);
        return $item;
    });

    $storage_grid = Netweight::where(['identifier' => 'storage_des'])->get()->map(function ($item) {
        $item->data = json_decode($item->data, true);
        return $item;
    });

    $combined_data = [];

    foreach ($material_grid as $material) {
        foreach ($material->data as $data) {
            array_push($combined_data, $data);
        }
    }

    foreach ($grn_grid as $grn) {
        foreach ($grn->data as $data) {
            array_push($combined_data, $data);
        }
    }

    foreach ($weighieng_grid as $weighing) {
        foreach ($weighing->data as $data) {
            array_push($combined_data, $data);

        }
    }
    
    foreach ($quality_grid as $quality) {
        foreach ($quality->data as $data) {
            array_push($combined_data, $data);

        }
    }

    foreach ($storage_grid as $storage) {
        foreach ($storage->data as $data) {
            array_push($combined_data, $data);

        }
    }


    $combined_data = [collect($combined_data)->collapse()->toArray()];

    // return $combined_data;
    // dd($combined_data);;

    // Repeat similar merging for $weighieng_grid, $quality_grid, and $storage_grid

    return view('admin.net_wight_calculator.net_weight', compact('pageTitle', 'combined_data', 'newProd_planning'));
}
  
    
     public  function store(Request $request)
    {
        $pageTitle  = 'Production Planning';
        $newexpMaterial = Netweight::all();
   
        $newavl    = new Netweight();
        $notification = ' added successfully';
        $newavl->save();
        

        // ==================Material/Product Grid==============================

        $net_weight_id = $newavl->id;
        $netWeightGrid = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'details'])->firstOrCreate();
        $netWeightGrid->nw_id = $net_weight_id;
        $netWeightGrid->identifier = 'details';
        $netWeightGrid->data = $request->details;
        $netWeightGrid->save();
        // dd($newavl);

        // ==================GRN Information==============================

        $net_weight_id = $newavl->id;
        $netWeightGridGrn = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'grn_info'])->firstOrCreate();
        $netWeightGridGrn->nw_id = $net_weight_id;
        $netWeightGridGrn->identifier = 'grn_info';
        $netWeightGridGrn->data = $request->grn_info;
        $netWeightGridGrn->save();

        // ==================Weighing Information==============================

        $net_weight_id = $newavl->id;
        $netWeightGridWeight = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'weighting_info'])->firstOrCreate();
        $netWeightGridWeight->nw_id = $net_weight_id;
        $netWeightGridWeight->identifier = 'weighting_info';
        $netWeightGridWeight->data = $request->weighting_info;
        $netWeightGridWeight->save();

        // ==================Quality Control==============================

        $net_weight_id = $newavl->id;
        $netWeightGridQuality = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'quality_control'])->firstOrCreate();
        $netWeightGridQuality->nw_id = $net_weight_id;
        $netWeightGridQuality->identifier = 'quality_control';
        $netWeightGridQuality->data = $request->quality_control;
        $netWeightGridQuality->save();

        // ==================Storage and Dispensing Information==============================

        $net_weight_id = $newavl->id;
        // dd($newavl);
        $netWeightGridStorage = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'storage_des'])->firstOrCreate();
        $netWeightGridStorage->nw_id = $net_weight_id;
        $netWeightGridStorage->identifier = 'storage_des';
        $netWeightGridStorage->data = $request->storage_des;
        $netWeightGridStorage->save();
       
        $notify[] = ['success', $notification];
        
        return back()->withNotify($notify);
      return " create succes";
    }
//     public  function net_weight()
//     {
//         $pageTitle  = 'Net Weight Calculator';
//         $netweight = Netweight::all();
//         // return "test";
//         return view('admin.net_wight_calculator.net_weight',compact('pageTitle', 'netweight'));
//     }
//     public  function store(Request $request)
//     {
//         $data = new Netweight();
//         $notification = 'data added successfully';
//         $data->save();

//         // ==================Material/Product Grid==============================

//         $net_weight_id = $data->id;
//         $netWeightGrid = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'details'])->firstOrCreate();
//         $netWeightGrid->nw_id = $net_weight_id;
//         $netWeightGrid->identifier = 'details';
//         $netWeightGrid->data = $request->details;
//         $netWeightGrid->save();

//         // ==================GRN Information==============================

//         $net_weight_id = $data->id;
//         $netWeightGridGrn = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'grn_info'])->firstOrCreate();
//         $netWeightGridGrn->nw_id = $net_weight_id;
//         $netWeightGridGrn->identifier = 'grn_info';
//         $netWeightGridGrn->data = $request->grn_info;
//         $netWeightGridGrn->save();

//         // ==================Weighing Information==============================

//         $net_weight_id = $data->id;
//         $netWeightGridWeight = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'weighting_info'])->firstOrCreate();
//         $netWeightGridWeight->nw_id = $net_weight_id;
//         $netWeightGridWeight->identifier = 'weighting_info';
//         $netWeightGridWeight->data = $request->weighting_info;
//         $netWeightGridWeight->save();

//         // ==================Quality Control==============================

//         $net_weight_id = $data->id;
//         $netWeightGridQuality = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'quality_control'])->firstOrCreate();
//         $netWeightGridQuality->nw_id = $net_weight_id;
//         $netWeightGridQuality->identifier = 'quality_control';
//         $netWeightGridQuality->data = $request->quality_control;
//         $netWeightGridQuality->save();

//         // ==================Storage and Dispensing Information==============================

//         $net_weight_id = $data->id;
//         $netWeightGridStorage = Netweight::where(['nw_id' => $net_weight_id, 'identifier' => 'storage_des'])->firstOrCreate();
//         $netWeightGridStorage->nw_id = $net_weight_id;
//         $netWeightGridStorage->identifier = 'storage_des';
//         $netWeightGridStorage->data = $request->storage_des;
//         $netWeightGridStorage->save();

//         // return back();
//         $notify[] = ['success', $notification];
//         return back()->withNotify($notify);
//     }

//     public function show(Request $request){
                
//         $data = Netweight::all();
//         $pageTitle  = 'Net Weight Calculator';
//         // $net_weight_id = $data->id;
//         $material_grid = Netweight::where(['identifier' => 'details'])->get();
//         $grn_grid = Netweight::where(['identifier' => 'grn_info'])->get();
//         $weighieng_grid = Netweight::where(['identifier' => 'weighting_info'])->get();
//         $quality_grid = Netweight::where(['identifier' => 'quality_control'])->get();
//         $storage_grid = Netweight::where(['identifier' => 'storage_des'])->get();
//         // dd($material_grid);
//         // return $material_grid;
//         return view('admin.net_wight_calculator.net_weight',compact('material_grid', 'grn_grid', 'weighieng_grid', 'quality_grid', 'storage_grid', 'data', 'pageTitle'));
// }
}
