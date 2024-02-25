<?php

namespace App\Http\Controllers\Api;

use App\Models\Regional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegionalController extends Controller
{
    public function index(){
        $regionals = Regional::latest()->paginate(3);
        return response()->json([
            "response" => [
                "status" => 200,
                "message"=> "Data regional berhasil"
            ],
            "data" => $regionals
        ],200);
    }
}
