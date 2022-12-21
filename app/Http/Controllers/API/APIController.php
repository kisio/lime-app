<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class APIController extends Controller
{
    public function getDataFromAPI($endpoint)
{
    // use the Guzzle HTTP client to make the request and retrieve the data
    $client = new Client();
    $response = $client->get($endpoint);
    $data = $response->getBody();
    $data=json_decode($data,true);
    // divide the data by 3
    $chunks = array_chunk($data, 3);
// Iterate over the array of chunks and create a new Entity model for each chunk
foreach ($chunks as $chunk) {
    Entity::create([
        'name' => $chunk['name'],
        'description' => $chunk['description'],
        'cors' => $chunk['cors'],
    ]);
    $entity->save();
}

    // return the data to the caller
    return $data;
}

}
