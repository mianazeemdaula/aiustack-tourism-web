<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $res = Tour::with(['comments', 'reactions'])->get();
        return response()->json($res);
    }
}
