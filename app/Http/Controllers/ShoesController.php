<?php

namespace App\Http\Controllers;

use App\Models\MaleShoeSizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Validator;

class ShoesController extends Controller
{
    public function index()
    {
        $results = MaleShoeSizes::all();
        return response($results, 200);
    }
}