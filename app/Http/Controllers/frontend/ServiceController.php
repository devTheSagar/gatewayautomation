<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function accountAndFinance(){
        return view('frontend.services.account-and-finance.index');
    }

    public function hrAndPayroll(){
        return view('frontend.services.hr-and-payroll.index');
    }

    public function realEstateAndProperty(){
        return view('frontend.services.real-estate-and-property.index');
    }

    public function tradingBusiness(){
        return view('frontend.services.trading-business.index');
    }

    public function supplyChainManagement(){
        return view('frontend.services.supply-chain-management.index');
    }

    public function manufacturing(){
        return view('frontend.services.manufacturing.index');
    }

    public function educationManagement(){
        return view('frontend.services.education-management.index');
    }

    public function teaStateManagement(){
        return view('frontend.services.tea-estate-management.index');
    }
    
    public function appAndWebsite(){
        return view('frontend.services.mobile-app-website.index');
    }

    public function ict(){
        return view('frontend.services.ict.index');
    }

    public function customerService(){
        return view('frontend.services.customer-service.index');
    }

    public function mobilePhoneManagement(){
        return view('frontend.services.mobile-phone-management.index');
    }

    public function architecturalAndEng(){
        return view('frontend.services.architectural-and-engineering.index');
    }

    public function procurementInventory(){
        return view('frontend.services.procurement-and-inventory.index');
    }

    public function salesTelesales(){
        return view('frontend.services.sales-and-telesales.index');
    }

    public function vehicleManagement(){
        return view('frontend.services.vehicle-management.index');
    }

    public function itesSupport(){
        return view('frontend.services.ites-support.index');
    }

    public function softwateDevelopment(){
        return view('frontend.services.software-development.index');
    }

    public function cloudHosting(){
        return view('frontend.services.cloud-hosting.index');
    }

    public function trainingConsultancy(){
        return view('frontend.services.training-consultancy.index');
    }
}
