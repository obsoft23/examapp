<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\Models\User;
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
        $userProfile = UserProfile::find(Auth::user()->id);

        return view('profile', compact('userProfile'));
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
         $profile_details = UserProfile::find(Auth::user()->id);
         return view('editprofile', compact('profile_details'));
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
                'profilepicture' =>  'required|image|mimes:jpeg,png,jpg'
              ]);

              $user_id = Auth::user()->id;
              $name = $request->profilepicture->hashName(); 
              $data = ([
                'user_id' => $user_id,
                'profile_picture' => $name
              ]);

              $request->profilepicture->storeAs('public/profilepictures/', $name);
              UserProfile::updateOrCreate(['user_id' => Auth::user()->id], $data);
              
              //$details = UserProfile::with('user')->get();
              

              //return view('/profile')->with('user_details', $details);
             

              //dd(auth()->user()->getUSerDetails());
              
              return redirect()->back(); 
              
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
