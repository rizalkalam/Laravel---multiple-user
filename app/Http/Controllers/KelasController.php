<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function show(Kelas $kelas)
    {
        return view('kelas.show',[
            'kelas'=>$kelas->visit()->withIP()->withSession()->withUser(),
            'count'=>Kelas::withTotalVisitCount()->first()->visit_count_total
        ]);
    }
}
