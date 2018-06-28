<?php

namespace App\Http\Controllers;
use SSOManager\Facades\SSO;

class IndexController extends Controller
{

    public function index(){
        return SSO::requestAuthorization();
    }
}
