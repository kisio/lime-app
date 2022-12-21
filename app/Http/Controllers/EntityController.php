<?php
namespace App\Http\Controllers;
use App\Http\Controllers\EntityController;
use GuzzleHttp\client as Http;
use App\Models\Entity;
use App\Models\Entry;


use Illuminate\Http\Request;
class EntityController extends Controller
{
    //
    public function index()
    {
    $entities = Entity::where('cors', true)->get();
    // return response as json entities
    return response()->json($entities);

    }                               
    public function views(){
        $entries= Entry::all();
        return view('lime.index')->with('entries',$entries);
    }
}
