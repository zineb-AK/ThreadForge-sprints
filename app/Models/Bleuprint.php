<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bleuprint extends Model
{  
    
protected $fillable=
    ['name','tone','max_hashtags','max_caracteres','user_id'];
    
    
    public function user (){
        return $this->belongsTo(User::class);
    }
    
    
    }
