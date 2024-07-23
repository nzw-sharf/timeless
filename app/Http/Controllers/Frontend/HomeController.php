<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Accommodation;
use App\Models\Agent;
use App\Models\Article;
use App\Models\Category;
use App\Models\Community;
use App\Models\OfferType;
use App\Models\PageTag;
use App\Models\Property;
use App\Models\Testimonial;
use App\Utils\Paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $groupApi = [
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/developer/list', '{"size": 13}'],
            ['GET', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/house/type/list', '{}'],
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"NEW","size":8,"sort" : "ID",
    "sortType":"DESC"}'],

        ];
        $response1 = [];
        foreach ($groupApi as $key => $api) {
            $method = $api[0];
            $url = $api[1];
            $data = isset($api[2]) ? $api[2] : null;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                    'Content-Type: application/json'
                ),
            ));

            // Optional: If you need to set headers or handle other options, do it here

            $response = curl_exec($curl);

            if ($response === false) {
                echo 'cURL Error: ' . curl_error($curl);
            } else {
                $response1[$key] = $response;
            }

            curl_close($curl);
        }


        $developerArray = json_decode($response1[0], true);
        $developers = $developerArray['data']['list'];

        $accomArray = json_decode($response1[1], true);
        $accomodation = $accomArray['data'];

        $propArray = json_decode($response1[2], true);
        $properties = $propArray['data']['list'];

        $communities = Community::active()->where('is_display_home', 1)->take(12)->get();



        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        $offerType = config('constants.offerType');
        $bedrooms = config('constants.roomsList');
        $blogs = Article::active()->latest()->take(3)->get();
        $testimonials = Testimonial::active()->latest()->get();


        return view('frontend.home', compact('pagemeta', 'offerType', 'developers', 'accomodation', 'communities', 'blogs', 'testimonials', 'properties', 'bedrooms'));
    }
    public function aboutUs()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        $agents = Agent::active()->take(8)->get();
        return view('frontend.aboutUs', compact('pagemeta', 'agents'));
    }

    public function properties(Request $request)
    {

        if ($request->isMethod('post')) {
            $maxPrice = '';
            if (isset($request->maxPrice)) { 
                $maxPrice = '"endPrice"'.':'. $request->maxPrice.', ';
            }
            if (isset($request->category)) {
                $groupApi = [
                    ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",    "listingType":"' . $request->category . '","name":"' . $request->keyword . '", "propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . ','.$maxPrice.'"sort" : "ID","sortType":"DESC"}'],
                    ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",   "listingType":"' . $request->category . '", "propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . ','.$maxPrice.'"sort" : "ID","name":"' . $request->keyword . '",   "sortType":"DESC","size":6}'],

                ];
            } else {
                $groupApi = [
                    ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",
    "listingType":"RENT",
    "sort" : "ID","name":"' . $request->keyword . '","propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . ','.$maxPrice.'
    "sortType":"DESC"}'],
                    ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",
    "listingType":"SELL",
    "sort" : "ID","name":"' . $request->keyword . '","propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . ','.$maxPrice.'
    "sortType":"DESC"}'],
                    ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",
    "listingType":"SELL","startPrice":' . ($request->minPrice ? $request->minPrice : 0) . ','.$maxPrice.'
    "sort" : "ID","name":"' . $request->keyword . '","propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],
    "sortType":"DESC","size":6}'],
                ];
            }
        } else {
            $groupApi = [
                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"RENT","sort" : "ID","sortType":"DESC"}'],
                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"SELL","sort" : "ID","sortType":"DESC"}'],
                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"SELL","sort" : "ID","sortType":"DESC","size":6}'],
            ];
        }
        //  dd($groupApi);
        $response1 = [];
        foreach ($groupApi as $key => $api) {
            $method = $api[0];
            $url = $api[1];
            $data = isset($api[2]) ? $api[2] : null;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                    'Content-Type: application/json'
                ),
            ));

            // Optional: If you need to set headers or handle other options, do it here

            $response = curl_exec($curl);

            if ($response === false) {
                echo 'cURL Error: ' . curl_error($curl);
            } else {
                $response1[$key] = $response;
            }

            curl_close($curl);
        }
        if (isset($request->category)) {
            $sell = json_decode($response1[0], true);
            // $propArray = json_decode($response1[0], true);
            $properties = $sell['data']['list'];

            $ExcArray = json_decode($response1[1], true);
            $exclusive = $ExcArray['data']['list'];
        } else {
            $sell = json_decode($response1[0], true);
            $rent = json_decode($response1[1], true);
            $mergedarray = array_merge($rent['data']['list'], $sell['data']['list']);
            // $propArray = json_decode($response1[0], true);
            $properties = $mergedarray;

            $ExcArray = json_decode($response1[2], true);
            $exclusive = $ExcArray['data']['list'];
        }



        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.properties', compact('pagemeta', 'exclusive', 'properties'));
    }
    public function rent(Request $request)
    {

        $groupApi = [
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"RENT","sort" : "ID","sortType":"DESC"}'],
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"RENT","sort" : "ID","sortType":"DESC","size":6}'],
        ];
        // dd($groupApi);
        $response1 = [];
        foreach ($groupApi as $key => $api) {
            $method = $api[0];
            $url = $api[1];
            $data = isset($api[2]) ? $api[2] : null;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                    'Content-Type: application/json'
                ),
            ));

            // Optional: If you need to set headers or handle other options, do it here

            $response = curl_exec($curl);

            if ($response === false) {
                echo 'cURL Error: ' . curl_error($curl);
            } else {
                $response1[$key] = $response;
            }

            curl_close($curl);
        }
        $sell = json_decode($response1[0], true);
        // $propArray = json_decode($response1[0], true);
        $properties = $sell['data']['list'];

        $ExcArray = json_decode($response1[1], true);
        $exclusive = $ExcArray['data']['list'];



        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.properties', compact('pagemeta', 'exclusive', 'properties'));
    }
    public function buy(Request $request)
    {

        $groupApi = [
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"SELL","sort" : "ID","sortType":"DESC"}'],
            ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE","listingType":"SELL","sort" : "ID","sortType":"DESC","size":6}'],
        ];
        // dd($groupApi);
        $response1 = [];
        foreach ($groupApi as $key => $api) {
            $method = $api[0];
            $url = $api[1];
            $data = isset($api[2]) ? $api[2] : null;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                    'Content-Type: application/json'
                ),
            ));

            // Optional: If you need to set headers or handle other options, do it here

            $response = curl_exec($curl);

            if ($response === false) {
                echo 'cURL Error: ' . curl_error($curl);
            } else {
                $response1[$key] = $response;
            }

            curl_close($curl);
        }
        $sell = json_decode($response1[0], true);
        // $propArray = json_decode($response1[0], true);
        $properties = $sell['data']['list'];

        $ExcArray = json_decode($response1[1], true);
        $exclusive = $ExcArray['data']['list'];



        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.properties', compact('pagemeta', 'exclusive', 'properties'));
    }
    public function projects(Request $request)
    {
        if (isset($request->page)) {
            $page = $request->page;
        } else {
            $page = 1;
        }
        if ($request->has('keyword') || $request->has('accomodation') || $request->has('bedroom') || $request->has('maxPrice') || $request->has('minPrice')) {
            $maxPrice = '';
            if (isset($request->maxPrice)) { 
                $maxPrice = '"endPrice"'.':'. $request->maxPrice.', ';
            }
            $groupApi = [
                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",        "listingType":"NEW","sort" : "ID","sortType":"DESC","size":-1,"name":"' . $request->keyword . '","propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],'.$maxPrice.'"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . '}'],

                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",        "listingType":"NEW","sort" : "ID","sortType":"DESC","size":6,"name":"' . $request->keyword . '","propertyType": [' . $request->accomodation . '],"bedRoomNum": [' . $request->bedroom . '],'.$maxPrice.'"startPrice":' . ($request->minPrice ? $request->minPrice : 0) . '}'],
            ];
        } else {
            $groupApi = [
                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",
        "listingType":"NEW",
        "sort" : "ID",
        "sortType":"DESC","size":-1}'],

                ['POST', 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/', '{"status" : "ACTIVE",
        "listingType":"NEW",
        "sort" : "ID",
        "sortType":"DESC","size":6}'],
            ];
        }

        $response1 = [];
        foreach ($groupApi as $key => $api) {
            $method = $api[0];
            $url = $api[1];
            $data = isset($api[2]) ? $api[2] : null;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                    'Content-Type: application/json'
                ),
            ));

            // Optional: If you need to set headers or handle other options, do it here

            $response = curl_exec($curl);

            if ($response === false) {
                echo 'cURL Error: ' . curl_error($curl);
            } else {
                $response1[$key] = $response;
            }

            curl_close($curl);
        }

        $propArray = json_decode($response1[0], true);

        $projects = $propArray['data']['list'];
        $projects = Paginate::paginate($projects, 9);
        $ExcArray = json_decode($response1[1], true);
        $exclusive = $ExcArray['data']['list'];

        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();

        return view('frontend.projects', compact('pagemeta', 'exclusive', 'projects'));
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
    public function agentDetails(Request $request)
    {
        $agent = Agent::where('id', $request->teamId)->first();

        $html = view('frontend.agentDetail', compact('agent'))->render();

        return response()->json(['success' => true, 'html' => $html, 'url' => request()->getRequestUri()]);
    }
    public function media()
    {
        $pagemeta =  PageTag::where('page_name', Route::current()->getName())->first();
        $latestBlog = Article::active()->take(6)->get();
        $blogs = Article::active()->paginate(8);
        $communities = Community::active()->where('is_display_home', 1)->take(12)->get();
        return view('frontend.blogs', compact('pagemeta', 'latestBlog', 'blogs', 'communities'));
    }
    public function singleBlog($slug)
    {
        $blog = Article::where('slug', $slug)->first();

        $latestBlogs = Article::active()->where('slug', '!=', $slug)->take(3)->get();
        return view('frontend.singleBlog', compact('latestBlogs', 'blog'));
    }
    public function singleProject($slug)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/' . $slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $projectArray = json_decode($response, true);
        $project = $projectArray['data'];
        $devId = $project['developerId'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "status" : "ACTIVE",
                "listingType":"NEW",
                "sort" : "ID",
                "sortType":"DESC",
                "developerIds":[' . $devId . ']
            }',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                'Content-Type: application/json'
            ),
        ));

        $response1 = curl_exec($curl);

        curl_close($curl);
        $similar = json_decode($response1, true);
        $similarProjects = $similar['data']['list'];
        // dd($project);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/amenities',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . ''
            ),
        ));

        $response2 = curl_exec($curl);

        curl_close($curl);
        $amnity = json_decode($response2, true);
        $amenities = $amnity['data'];
        return view('frontend.singleProject', compact('project', 'similarProjects', 'amenities'));
    }
    public function singleProperty($slug)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/' . $slug,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . ''
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $projectArray = json_decode($response, true);
        $property = $projectArray['data'];
        $devId = $property['developerId'];
        $type = $property['propertyType'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "status" : "ACTIVE",
                "listingType":"' . $type . '",
                "sort" : "ID",
                "sortType":"DESC",
                "developerIds":[' . $devId . ']
            }',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                'Content-Type: application/json'
            ),
        ));

        $response1 = curl_exec($curl);

        curl_close($curl);
        $similar = json_decode($response1, true);
        $similarProperty = $similar['data']['list'];
        return view('frontend.singleProperty', compact('property', 'similarProperty'));
    }
    public function singlearea($slug)
    {
        $community = Community::where('slug', $slug)->first();
        return view('frontend.singlearea', compact('community'));
    }
}
