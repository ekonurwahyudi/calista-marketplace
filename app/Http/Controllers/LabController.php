<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index(){
        return view('dashboardLab.index');
    }

        public function settinglab($id){
        $laboratorium = Laboratorium::find($id);
        return view('dashboardLab.settinglab', ['laboratorium' => $laboratorium]);
    }

    public function settinglabUpdate($id, Request $request){

        $this->validate($request,[
            'nama_lab' => 'required',
        ]);

        $laboratorium = Laboratorium::find($id);
        $laboratorium->nama_lab = $request->nama_lab;
        $laboratorium->hp_lab = $request->hp_lab;
        $laboratorium->email_lab = $request->email_lab;
        $laboratorium->alamat_lab = $request->alamat_lab;
        $laboratorium->no_akreditasi = $request->no_akreditasi;
        $laboratorium->duedate_akreditasi = $request->duedate_akreditasi;
        $laboratorium->sertifikat = $request->sertifikat;
        $laboratorium->ruanglingkup = $request->ruanglingkup;
        $laboratorium->jadwal_lab = $request->jadwal_lab;
        $laboratorium->save();
        return view('dashboardLab.settinglab', ['laboratorium' => $laboratorium]);
    }
}
