<?php

namespace App\Http\Controllers;

use App\Models\surat;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){              
        $kinali=User::where('dusun', '=', 'kinali')->count();
        $tulus=User::where('dusun', '=', 'tulus')->count();
        $suangking=User::where('dusun', '=', 'suangking')->count();
        $ikhlas=User::where('dusun', '=', 'ikhlas')->count();
        $totalmasyarakat=User::where('role', '=', 'masyarakat')->count();
        $sudahmenikah=User::where('status', '=', 'sudah menikah')->count();
        $belummenikah=User::where('status', '=', 'belum menikah')->count();
        $pekerjaan=User::where('pekerjaan', '=', 'pelajar')->count();
        return view('admin.dashboarda', compact('kinali', 'tulus', 'suangking', 'ikhlas', 'totalmasyarakat', 'sudahmenikah', 'belummenikah', 'pekerjaan'));
        
    }
}
