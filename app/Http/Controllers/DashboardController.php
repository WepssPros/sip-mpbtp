<?php

namespace App\Http\Controllers;

use App\Models\ArsipPerkara;
use App\Models\Sidang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $arsips = ArsipPerkara::all();
        $arsipssize1 = ArsipPerkara::sum('size_1');
        $arsipssize2 = ArsipPerkara::sum('size_2');
        $arsipssize3 = ArsipPerkara::sum('size_3');
        $arsipssize4 = ArsipPerkara::sum('size_4');


        $totalsize = $arsipssize1 + $arsipssize2 + $arsipssize3 + $arsipssize4;

        $date = Carbon::today();

        $sidangs = Sidang::where('tgl_sidang', $date)->get();

        return view('dashboard', compact(
            'arsips',
            'totalsize',
            'sidangs'
        ));
    }
}
