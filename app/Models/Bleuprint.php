<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bleuprint extends Model
{  
    
protected $fillable=
    ['name','tone',,'max_characters','max_hashtags','user_id'];
    
    
    public function user (){
        return $this->belongsTo(User::class);
    }
    
    
    }
