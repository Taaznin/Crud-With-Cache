<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   public $timestamps = false;
   protected $table = 'role';
   protected $guarded =['id'];


   protected $dispatchesEvents = [
        'created' => \App\Events\roleSaved::class,
        'updated' => \App\Events\roleUpdate::class,
        'deleted' => \App\Events\roleDelete::class,
    ];
}
