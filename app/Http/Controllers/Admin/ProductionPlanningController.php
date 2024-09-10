<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Production_Planning;
use Illuminate\Http\Request;

class ProductionPlanningController extends Controller
{
    public  function index()
    {
        $pageTitle  = 'Production Planning';
        $newProd_planning = Production_Planning::all();
        // return "test";
        return view('admin.production_planning.product_planning',compact('pageTitle','newProd_planning'));
    }
     public  function storeProduction_planningg(Request $request,$id=0)
    {
        $pageTitle  = 'Production Planning';
        $newexpMaterial = Production_Planning::all();
        if ($id) {
            $newavl    = Production_Planning::findOrFail($id);
            $notification = ' updated successfully';
        } else {
            $newavl    = new Production_Planning();
            $notification = ' added successfully';
        }

        $newavl->production_order_id = $request->production_order_id;
        $newavl->product_name = $request->product_name;
        $newavl->generic_name = $request->generic_name;
        $newavl->product_code = $request->product_code;
        $newavl->batch_no = $request->batch_no;
        $newavl->production_quantity = $request->production_quantity;
        $newavl->production_date = $request->production_date;
        $newavl->expected_com_date = $request->expected_com_date;
        $newavl->vendor_status = $request->vendor_status;
        $newavl->production_line = $request->production_line;
        $newavl->production_suite = $request->production_suite; 
        $newavl->raw_materials_list = $request->raw_materials_list;
       
// dd($newavl);
        $newavl->save();
        $notify[] = ['success', $notification];
        
        return back()->withNotify($notify);
      return " create succes";
    }
    public function destroy($id)
    {
        try {
            $record = Production_Planning::findOrFail($id);  // Find the record
            $record->delete();  // Delete the record
    
            return response()->json(['success' => true]);  // Return success response
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);  // Return error response
        }
    }
    
}
