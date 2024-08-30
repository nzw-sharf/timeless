<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\AgentRequest;
use Illuminate\Support\Str;
use App\Models\{
    Agent,
    Language,
    Service,
    Developer,
    Community,
    Project
};
use Auth;

class AgentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:'.config('constants.Permissions.real_estate'), ['only' => ['index','create', 'edit', 'update', 'destroy','getAgents']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $agents = Agent::with('user')
            ->applyFilters($request->only(['status']))
            ->orderBy('id','desc')
            ->get();

        return view('dashboard.realEstate.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $languages = Language::active()->latest()->get();
        $communities = Community::active()->latest()->get();

        return view('dashboard.realEstate.agents.create', compact('communities','languages'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentRequest $request)
    {
        try{
            $agent = new Agent;
            $agent->name = $request->name;
            $agent->status = $request->status;
            $agent->email = $request->email;
            $agent->contact_number = $request->contact_number;
            $agent->whatsapp_number = $request->whatsapp_number;
            $agent->designation = $request->designation;
            $agent->nationality = $request->nationality;
            $agent->linkedin_profile = $request->linkedin_profile;
            $agent->license_number = $request->license_number;
            $agent->specialization = $request->specialization;
            $agent->user_id = Auth::user()->id;
            if ($request->hasFile('image')) {
                $img =  $request->file('image');
                $imgExt = $img->getClientOriginalExtension();
                $imageName =  Str::slug($request->name).'.'.$imgExt;
                $agent->addMediaFromRequest('image')->usingFileName($imageName)->toMediaCollection('images', 'agentFiles');
            }
            $agent->save();
            if($request->has('languageIds')){
                $agent->languages()->attach($request->languageIds);
            }
            if($request->has('communityIds')){
                $agent->communities()->attach($request->communityIds);
            }
            return response()->json([
                'success' => true,
                'message'=> 'Agent has been created successfully.',
                'redirect' => route('dashboard.agents.index'),
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message'=> $error->getMessage(),
                'redirect' => route('dashboard.agents.index'),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        $languages = Language::active()->latest()->get();
        $services = Service::mainService()->active()->latest()->get();
        $developers = Developer::active()->latest()->get();
        $communities = Community::active()->latest()->get();
        $projects = Project::mainProject()->active()->latest()->get();
        return view('dashboard.realEstate.agents.edit',compact('projects','developers','communities','agent','languages','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgentRequest $request, Agent $agent)
    {
        try{
            $agent->name = $request->name;
            $agent->generateSlug();
            $agent->status = $request->status;
            $agent->email = $request->email;
            $agent->contact_number = $request->contact_number;
            $agent->whatsapp_number = $request->whatsapp_number;
            $agent->designation = $request->designation;
            $agent->nationality = $request->nationality;
            $agent->linkedin_profile = $request->linkedin_profile;
            $agent->specialization = $request->specialization;
            $agent->license_number = $request->license_number;
            $agent->user_id = Auth::user()->id;
            if ($request->hasFile('image')) {
                $agent->clearMediaCollection('images');
                $img =  $request->file('image');
                $imgExt = $img->getClientOriginalExtension();

                $imageName =  Str::slug($request->name).'.'.$imgExt;
                $agent->addMediaFromRequest('image')->usingFileName($imageName)->toMediaCollection('images', 'agentFiles');
            }
            $agent->save();
            if($request->has('languageIds')){
                $agent->languages()->detach();
                $agent->languages()->attach($request->languageIds);

            }
            if($request->has('communityIds')){
                $agent->communities()->detach();
                $agent->communities()->attach($request->communityIds);
            }
            return response()->json([
                'success' => true,
                'message'=> 'Agent has been updated successfully.',
                'redirect' => route('dashboard.agents.index'),
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'success' => false,
                'message'=> $error->getMessage(),
                'redirect' => route('dashboard.agents.index'),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $agent = Agent::find($id);
            foreach($agent->testimonals as $testimonal){
                $testimonal->status = config('constant.Inactive');
                $testimonal->save();
            }
            $agent->delete();

            return redirect()->route('dashboard.agents.index')->with('success','Agent has been deleted successfully');

        }catch(\Exception $error){
            return redirect()->route('dashboard.agents.index')->with('error',$error->getMessage());
        }
    }
    public function getAgents(Request $request)
    {
  
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dataapi.pixxicrm.ae/pixxiapi/v1/properties/Timeless%20Properties/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"status":"ACTIVE"}',
            CURLOPT_HTTPHEADER => array(
                'X-PIXXI-TOKEN: ' . env('PIXXI_TOKEN') . '',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        $communitiesArray = json_decode($response, true);
        
        
        $communityVal = $communitiesArray['data']['list'];
        
        foreach ($communityVal as $key => $comm) {
                $community = Agent::where('id', $comm['agent']['id'])->first();
                if (!empty($community)) {
                } else {
                    $comnty = new Agent();
                    $comnty->id = $comm['agent']['id'];
                    $comnty->name = $comm['agent']['name'];
                    $comnty->email = $comm['agent']['email'];
                    $comnty->contact_number = $comm['agent']['phone'];
                    $comnty->avatar = $comm['agent']['avatar'];
                    $comnty->status = config('constants.active');
                    $comnty->user_id = 1;
                    $comnty->save();
                }
    
           
        }
       

        $agents = Agent::with('user')
            ->applyFilters($request->only(['status']))
            ->latest()
            ->get();

        return view('dashboard.realEstate.agents.index', compact('agents'));
    }
}
