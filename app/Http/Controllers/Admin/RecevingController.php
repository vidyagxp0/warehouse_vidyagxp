<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Receving;
use Illuminate\Http\Request;

class RecevingController extends Controller
{
    public  function index()
    {
        $pageTitle  = 'Receiving';
        $newReceving = Receving::all();
        // return "test";
        return view('admin.Receiving.receiving',compact('pageTitle','newReceving'));
    }
    public  function storeReceving(Request $request,$id=0)
    {
        $pageTitle  = 'AVL';
        $newexpMaterial = Receving::all();
        if ($id) {
            $newreceving    = Receving::findOrFail($id);
            $notification = ' updated successfully';
        } else {
            $newreceving    = new Receving();
            $notification = ' added successfully';
        }

        $newreceving->receiving_order_id = $request->receiving_order_id;
        $newreceving->supplier_name = $request->supplier_name;
        // $newreceving->expiry_date = $request->expiry_date;
        $newreceving->product_code = $request->product_code;
        $newreceving->batch_number = $request->batch_number;
        $newreceving->quantity_received = $request->quantity_received;
        $newreceving->uom = $request->uom;
        $newreceving->manufacturing_date = $request->manufacturing_date;
        $newreceving->expiry_date = $request->expiry_date;
        // $newreceving->manufacturer_site = $request->manufacturer_site;
        $newreceving->storage_location = $request->storage_location; 
        $newreceving->location_id = $request->location_id;
        $newreceving->rack_id = $request->rack_id;
        $newreceving->quality_check_status = $request->quality_check_status;
        // $newreceving->deviation_id = $request->deviation_id;
        $newreceving->attachment = $request->attachment;
// dd($newreceving);
        $newreceving->save();
        $notify[] = ['success', $notification];
        
        return back()->withNotify($notify);
      return " create succes";
    }

    public function destroy($id)
    {
        try {
            $record = Receving::findOrFail($id);  // Find the record
            $record->delete();  // Delete the record
    
            return response()->json(['success' => true]);  // Return success response
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);  // Return error response
        }
    }

}
