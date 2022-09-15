<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller {
    
    public function index( 
        $data = [
        'names' => ['Béla', 'Géza', 'Karcsi']
    ]) {
        return view("test", $data); 
    }

}
