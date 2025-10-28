<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Content;
use App\Models\ServedIndustries;
use App\Models\SuccessStories;
use App\Models\Technologies;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $carousels = Carousel::where('status', 1)->latest()->get();
        $content = Content::first();
        $industries = ServedIndustries::where('status', 1)->latest()->get();
        $successStories = SuccessStories::Where('status', 1)->latest()->get();
        $technologies = Technologies::where('status', 1)->latest()->get();
        $testimonials = Testimonial::where('status', 1)->latest()->get();
        $clients = Client::where('status', 1)->latest()->get();

        return view('frontend.home', [
            'carousels'         => $carousels,
            'content'           => $content,
            'industries'        => $industries,
            'successStories'    => $successStories,
            'technologies'      => $technologies,
            'testimonials'      => $testimonials,
            'clients'           => $clients
        ]);
    }
}
