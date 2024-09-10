<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Netweight;

class NetWeightController extends Controller
{
    public  function storeAvl(Request $request,$id=0)
    {
        $pageTitle  = 'AVL';
        $newexpMaterial =  Netweight::all();
        if ($id) {
            $netweight    =  Netweight::findOrFail($id);
            $notification = ' updated successfully';
        } else {
            $netweight    = new  Netweight();
            $notification = ' added successfully';
        }

        $errata_id = $id;
        $newDataGridErrata = Netweight::where(['nw_id' => $errata_id, 'identifier' => 'details'])->firstOrCreate();
        $newDataGridErrata->e_id = $errata_id;
        $newDataGridErrata->identifier = 'details';
        $newDataGridErrata->data = $request->details;
        $newDataGridErrata->save();
// dd($netweight);
        $netweight->save();
        $notify[] = ['success', $notification]; 
        
        return back()->withNotify($notify);
      return " create succes";
    }

    public function showavl(Request $request ,$id){
     
        $newexp  =   Netweight::find($id);
         return "succes update";
}
}
