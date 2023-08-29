<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Layanan;
Use App\Models\Desa;
Use App\Models\DataForm;
class MasterController extends Controller
{
    public function layanan()
    {
        $data =Layanan::all();
        return view("layanan.index",compact("data"));
    }
    public function dataform()
    {
        $data = DataForm::all();
        return view("dataform.index",compact("data"));
    }
    public function dataformsimpan(Request $request)
    {
        $data = DataForm::create([
            'id_layanan' => $request->id_layanan,
            'nama_isian' => $request->nama_isian,
            'jenis' => $request->jenis,
        ]);
        return redirect()->back();
    }
    public function dataformdelete($id)
    {
        $data = DataForm::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function desa()
    {
        $data =Desa::all();
        return view("desa.index",compact("data"));
    }
}
