<?php

namespace App\Http\Controllers\Server;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends BaseController {
    
    public function SaveContact(Request $request) {        
        $data = "demo";
        // Save data
        return redirect()->route('home'); // go to homepage
    }

}