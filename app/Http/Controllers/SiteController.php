<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class SiteController extends Controller {

    public function __construct() {
        
    }

    public function index() {
        return view('welcome');
    }

}
