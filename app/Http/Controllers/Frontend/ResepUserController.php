<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepUserController extends Controller
{
    public function resep()
    {
        $reseps = Resep::with('user','kota')->where('status', 'Setuju')->get();
        return view('user', compact('reseps'));
    }
}
