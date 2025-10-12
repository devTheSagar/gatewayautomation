<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // this controller will handle all sub or oteher pages, like learn more pages in the slider etc
    public function rightDecision(){
        return view('frontend.pages.right-decision.index');
    }

    public function businessManagement(){
        return view('frontend.pages.business-management.index');
    }

    public function integratedAllBusiness(){
        return view('frontend.pages.integrated-all-busines.index');
    }

    public function realTimeDecision(){
        return view('frontend.pages.real-time-decision.index');
    }
}
