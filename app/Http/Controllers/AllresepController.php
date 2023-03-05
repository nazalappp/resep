<?php

namespace App\Http\Controllers;
use App\Models\Resep;
use Illuminate\Http\Request;

class AllresepController extends Controller
{
    public function index()
    {
        $reseps = Resep::with('user','kota')->where('status', 'Setuju')->get();
        return view('admin.allresep.index', compact('reseps'));
    }

    public function destroy($id)
    {
        $reseps = Resep::findOrFail($id);
        $reseps->delete();
        return redirect()->route('allresep.index')->with('toast_success', 'Data has been deleted');
    }
}
