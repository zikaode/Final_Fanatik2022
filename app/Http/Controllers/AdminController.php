<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use App\Mail\sendEmail;
use App\Models\Webinar;
use App\Models\Fotografi;
use App\Models\Olimpiade;
use App\Mail\ConfirmEmail;
use App\Models\PesertaKti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list = Olimpiade::where('status', 'pending')->get();
        $fotografis = Fotografi::where('status', 'pending')->get();
        $kti = PesertaKti::where('status', 'pending')->get();
        $poster = Poster::where('status', 'pending')->get();
        return view('admin')->with('list', $list)->with('fotografis', $fotografis)->with('kti', $kti)->with('poster', $poster);
    }

    public function config()
    {
        $config = DB::table('configuration')->get();
        return view('config')->with('config', $config);
    }

    public function config_tutup(Request $request)
    {
        $tutup = DB::table('configuration')->where('kunci', 'tutup')->update(['nilai' => $request->tutup]);
        return redirect()->route('pengaturan')->with('success', 'Tanggal Pendaftaran');
    }

    public function reject($cabang, $id)
    {
        if ($cabang == "kti") {
            $temp = PesertaKti::find($id);
            $temp->status = "reject";
            $temp->save();
            // $temp = PesertaKti::find($id);

            return redirect()->route('admin')->with('reject', 'Karya Tulis Ilmiah')->with('peserta', $temp->nama);
        }
    }

    public function confirm($cabang, $id)
    {
        if ($cabang == 'kti') {
            $temp = PesertaKti::find($id);
            $temp->status = "confirm";
            $temp->save();
            $temp = PesertaKti::find($id);
            Mail::to($temp->email)->send(new ConfirmEmail($temp));
            // $temp = PesertaKti::find($id);

            return redirect()->route('admin')->with('confirm', 'Karya Tulis Ilmiah')->with('peserta', $temp->nama);
        }
    }

    public function terverifikasi($cabang)
    {
        if ($cabang = 'kti') {
            $temp = PesertaKti::where('status', 'confirm')->get();
            return view('terverifikasi')->with('list', $temp)->with('cabang', 'Karya Tulis Ilmiah');
        }
    }

    public function direject($cabang)
    {
        if ($cabang = 'kti') {
            $temp = PesertaKti::where('status', 'reject')->get();
            return view('reject')->with('list', $temp)->with('cabang', 'Karya Tulis Ilmiah');
        }
    }

    // public function email()
    // {
    //     return new ConfirmEmail(PesertaKti::find(1));
    // }
}
