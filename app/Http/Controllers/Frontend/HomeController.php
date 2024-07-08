<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Category;
use App\Models\OfferType;
use App\Models\PageTag;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        $offerType = OfferType::active()->get();
        $categories = Category::active()->get();
        $accomodation = Accommodation::active()->get();
        $bedrooms = Property::select('bedrooms')->active()->groupBy('bedrooms')->get();

        return view('frontend.home', compact('pagemeta','offerType','categories','accomodation','bedrooms'));
    }
    public function aboutUs()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.aboutUs', compact('pagemeta'));
    }
    public function properties()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.properties', compact('pagemeta'));
    }

    public function contact()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        return view('frontend.contact', compact('pagemeta'));
    }

    public function termsConditions()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        return view('frontend.termsConditions', compact('pagemeta'));
    }
    public function privacyPolicy()
    {
        // dd(Route::current()->getName());
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        return view('frontend.privacyPolicy', compact('pagemeta'));
    }

    public function thankYou()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        return view('frontend.thankYou', compact('pagemeta'));
    }
    public function media()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        return view('frontend.blogs', compact('pagemeta'));
    }
    public function singleBlog($slug)
    {
        return view('frontend.singleBlog', compact('slug'));
    }
}
