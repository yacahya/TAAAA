<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\DataForm;
use App\Models\Pengajuan;
use App\Models\Isian;


use App\Services\NotificationService;
class PengajuanController extends Controller
{
    protected $notif;


    public function __construct()
    {
        $this->notif = new NotificationService();
    }
    public function tambah($layanan)
    {
        $layanan = Layanan::find($layanan);
        $formIsian = DataForm::whereIdLayanan($layanan->id)->whereJenis('text')->orderBy('jenis', "asc")->get();
        $formUpload = DataForm::whereIdLayanan($layanan->id)->whereJenis('upload')->orderBy('jenis', "asc")->get();
        return view('pengajuan.tambah', compact('layanan','formIsian','formUpload'));
        
    }
    public function simpan(Request $request,$layanan)
    {

        $tex =$request->text;
        $up =$request->upload;

      $pengajuan =   Pengajuan::create([
            'id_user'=> Auth()->user()->id,
            'id_desa'=> Auth()->user()->id_desa,
            'id_layanan'=> $layanan,
            'id_isian'=> $layanan,
            'status'=> 0,
            'no_wa'=> $request->no_wa,
        ]);
        foreach($request->id_formIsian as  $index => $i)
        {   
            
            Isian::create([
                'id_pengajuan'=> $pengajuan->id,
                'id_form'=> $i,
                'data_isian'=> $tex[$index],
                'jenis' => 0,
            ]);
        }
        foreach($request->id_formUpload as  $index => $i)
        {   
            $fileName = time().$i.'.'.$up[$index]->extension();  
            $up[$index]->move(public_path('uploads'), $fileName);
            Isian::create([
                'id_pengajuan'=> $pengajuan->id,
                'id_form'=> $i,
                'data_isian'=>  $fileName,
                'jenis'=>  1,
            ]);
        }
        return redirect()->back();
        
    }

    public function riwayat($layanan)
    {
        $data = Pengajuan::whereIdLayanan($layanan)->whereIdUser(Auth()->user()->id)->paginate(5);
        $dataLayanan = Layanan::find($layanan);
        return view('riwayat.index', compact('data','dataLayanan'));
    }
    public function riwayatDetail($layanan, $pengajuan)
    {
        $data = Pengajuan::find($pengajuan);
        $dataLayanan = Layanan::find($layanan);
        return view('riwayat.detail', compact('data','dataLayanan'));
    }


    public function aksi($layanan, $pengajuan,Request $request)
    {
       $ajuan = Pengajuan::find($pengajuan);
    
       $tombol =  $request->tombol;
       $pesan =   $request->pesan;

       if($tombol =="proses"){
        $ajuan->update([
            'status'=>1,
        ]);
        $this->notif->wa($ajuan->no_wa,$pesan);
        return redirect()->back();
       }else{
        $ajuan->update([
            'status'=>2,
        ]);
        $this->notif->wa($ajuan->no_wa,$pesan);
        return redirect()->back();
       }

        
        
        
    }
}
