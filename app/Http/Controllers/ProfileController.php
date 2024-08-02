<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
   public function GetEducation($id)
   {
    $Profile = Profile::where('id',$id)->first();
    return $Profile->Education->ColledgeName;
   }
   public function index()
    {
        // Retrieve all profiles
        $profiles = Profile::all();
        return response()->json($profiles);
    }

    public function show($id)
    {
        // Retrieve a single profile by ID
        $profile = Profile::findOrFail($id);
        return response()->json($profile);
    }

    public function store(Request $request)
    {
        // Create a new profile
        $profile = Profile::create($request->all());
        return response()->json($profile, 201);
    }

    public function update(Request $request, $id)
    {
        // Update an existing profile

        $profile = Profile::findOrFail($id);
        $profile->update($request->all());
        return response()->json($profile, 200);
    }

    public function destroy($id)
    {
        // Delete an existing profile
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return response()->json(null, 204);
    }
    public function FetchExternalApi()
    {
        $response = Http::get('https://unpkg.com/ionicons@5.5.2/dist/ionicons/svg/close-outline.svg');
        $resp = json_decode($response->body());
        return response()->json($resp, 200);
    }

}
