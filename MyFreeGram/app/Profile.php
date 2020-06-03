<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; 
 
 
    public function profileImage(){
       $imagePath = ($this->image) ? $this->image : "profiles/5gdY05xbUMPlaNxSqcwv3dM37mBhej43xsHMUsRb.jpeg";
        return '/storage/' . $imagePath;
    }
    
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
