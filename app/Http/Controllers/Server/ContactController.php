<?php

namespace App\Http\Controllers\Server;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class ContactController extends BaseController {

    public function SaveContact(Request $request) {
        DB::table('contact')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,  
            'created_at' => date('Y-m-d H:i:s')
        ]);        
        return response()->json(['success' => true]);
    }

}
