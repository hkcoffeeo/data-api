<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SingaporeSavingsBondResource;
use App\Models\SingaporeSavingsBond;
use Illuminate\Http\Request;

class SingaporeSavingsBondController extends Controller
{
    public function index(Request $request)
    {
        return SingaporeSavingsBondResource::collection(SingaporeSavingsBond::paginate(10));
    }
}
