<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Auth; 

class UserProfilesController extends Controller
{

    public  function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
         return view('editprofile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {       
            $update_type = $request->update_type;
           
            if($update_type === "one" && $request->hasFile('profilepicture'))
            {
              $request->validate([
                'profilepicture' =>  'required|image|mimes:jpeg,png,jpg,gif'
              ]);
              
              $name = $request->profilepicture->hashName(); 
              $userProfile = UserProfile::find(Auth::user()->id);
              
              if($userProfile == null) {
                $userProfile = new userProfile;
                $userProfile::create([
                 'profile_picture' => $name,
                 'user_id' => Auth::user()->id,
                ]);
              } else {
                $userProfile->profile_picture = $name;
                $request->profilepicture->store('/image/profilepictures');
            
                $userProfile->save();
              }
              
               
            } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
