<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Nasa extends Controller
{
    public function getNasa(){
        $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=ekSDIIA0McGr15BKG8cSjqTipnzOUlp5erJkBX13');
        $infoNasa = $response->json();

        return response()->json($infoNasa);
    } 
}
