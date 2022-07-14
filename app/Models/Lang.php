<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entry;

class Lang extends Model
{
    //use HasFactory;
    
    protected $table='tree_entry';

    public function category() {
        return $this->belongsTo(Entry::class, 'parent_entry id');
      }
    
    

    
}
