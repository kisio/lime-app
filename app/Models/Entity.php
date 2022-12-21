<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'cors',
    ];
    public function Entity(){
    $entity = new Entity();
    $entity->name = 'AdoptAPet 1';
    $entity->description = 'Resource to help get pets adopted3';
    $entity->cors = true;
    $entity->save();
    }
}


