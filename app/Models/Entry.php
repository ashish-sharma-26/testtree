<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lang;


class Entry extends Model
{
    //use HasFactory;
    protected $table='tree_entry_lang';

    public function subcategories() {
        return $this->hasMany(Lang::class, 'entry_id');
      }
    
    

}
