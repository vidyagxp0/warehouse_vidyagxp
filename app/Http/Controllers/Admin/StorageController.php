<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{

    public  function index()
    {
        $pageTitle  = 'Storage';
        $newStorage = Storage::all();
        // return "test";
        return view('admin.storage.storage',compact('pageTitle','newStorage'));
    }
    public  function storeStorage(Request $request,$id=0)
    {
        $pageTitle  = 'AVL';
        $newstorage = Storage::all();
        if ($id) {
            $newstorage    = Storage::findOrFail($id);
            $notification = ' updated successfully';
        } else {
            $newstorage    = new Storage();
            $notification = ' added successfully';
        }

        $newstorage->warehouse_id = $request->warehouse_id;
        $newstorage->location_id = $request->location_id;
        $newstorage->rack_id = $request->rack_id;
        $newstorage->bin_id = $request->bin_id;
        // $newstorage->product_name = $request->product_name;
        $newstorage->product_code = $request->product_code;
        $newstorage->batch_no = $request->batch_no;
        $newstorage->quantity_stock = $request->quantity_stock;
        $newstorage->storage_location = $request->storage_location;
        $newstorage->temperature_requirement = $request->temperature_requirement;
        $newstorage->expiry_date = $request->expiry_date;
        $newstorage->handling_instructions = $request->handling_instructions;
        $newstorage->file_attachment = $request->file_attachment;
      
// dd($newstorage);
        $newstorage->save();
        $notify[] = ['success', $notification];
        
        return back()->withNotify($notify);
      return " create succes";
    }

    public function destroy($id)
{
    try {
        $record = Storage::findOrFail($id);  // Find the record
        $record->delete();  // Delete the record

        return response()->json(['success' => true]);  // Return success response
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);  // Return error response
    }
}

}
