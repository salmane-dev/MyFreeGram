<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    { 
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

            // cache trick //
        $postCount = Cache::remember(
            'count.posts.'. $user->id,
            now()->addSeconds(40),
            function() use ($user){
            return $user->posts->count();
        }) ;

        $followersCount = Cache::remember(
            'count.followers.'. $user->id,
            now()->addSeconds(40),
            function() use ($user){
            return $user->profile->followers->count();
        }) ;
        
        $followingCount = Cache::remember(
            'count.following.'. $user->id,
            now()->addSeconds(40),
            function() use ($user){
            return $user->following->count() ;
        }) ;

        return view('profiles.index', compact('user' , 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user){

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }
    
    public function update(User $user){

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
        ]);

        #my spaguiti code
        #proud
        if(request('image')) {
            $imagepath = request('image')->store('profiles', 'public');
            $image = Image::make(public_path("storage/{$imagepath}"))->fit(1000,1000);
            $image->save();

            auth()->user()->profile->update(array_merge(
                $data,
                ['image' => $imagepath ]
            ));
        }
       
        auth()->user()->profile->update($data);
      
        return redirect("/profiles/{$user->id}");
    }


}
