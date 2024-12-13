<?php

namespace App\Http\Controllers;

use App\Exports\SantriExport;
use App\Models\Santri;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    // Menampilkan laporan HTML
    public function index()
    {
        $santris = Santri::all();
        return view('laporans.index', compact('santris'));
    }

    public function exportPdf()
    {
        $santris = Santri::all();
        $pdf = Pdf::loadView('laporans.index', compact('santris'));
        return $pdf->download('laporan_satri.pdf');
    }

    public function exportExcel()
    {
        return Santri::all();
    }
    
}
