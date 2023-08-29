<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\DataForm;
use App\Models\Pengajuan;
use App\Models\Isian;
class PengajuanController extends Controller
{
    public function tambah($layanan)
    {
        $layanan = Layanan::find($layanan);
        $form = DataForm::whereIdLayanan($layanan->id)->orderBy('jenis', "asc")->get();
        return view('pengajuan.tambah', compact('layanan','form'));
        
    }
    public function simpan(Request $request,$layanan)
    {
        
        $layanan = Layanan::find($layanan);
        $form = DataForm::whereIdLayanan($layanan->id)->orderBy('jenis', "asc")->get();
        foreach($form as $item){
            Isian::create([
                'id_form' => $item->id,
                'data_isian' => $request->text.'-'.$item->id,
            ]);
        };

        return view('pengajuan.tambah', compact('layanan','form'));
        
    }
}
