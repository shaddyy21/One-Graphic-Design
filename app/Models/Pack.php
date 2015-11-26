<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pack extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at']; 
    
    protected $fillable = ['description', 'path', 'active'];
    
    public function Sortby(){
        $packs = $this->packs()->orderBy('created_at','desc')->get(); 
    }
}
