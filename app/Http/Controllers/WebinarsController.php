<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Webinar;
use GuzzleHttp\Psr7\MimeType;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class WebinarsController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function webinar()
    {
        // dd(Webinar::all());
        $closed = DB::table('configuration')->where('kunci', 'tutup')->get();
        if (time() < strtotime($closed[0]->nilai)) { // + strtotime("01 April 2022")
            return view('reg_webinar');
        } else {
            return "Pendaftaran Ditutup!";
        }
    }

    public function store(Request $request)
    {
        // $test = $request->file('file_tp')->guessExtension();

        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'hp' => 'required|alpha_num',
            'instansi' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'file_tp' => 'required|mimes:jpg,png,jpeg|max:2048'
        ]);
        if ($request->has('file_tp')) {
            $namafile = date('smh:j-m-y', time()) . '-tp-' . $request->nama . '.' . $request->file('file_tp')->extension();
            $request->file('file_tp')->storeAs('images/tanda_pengenal', $namafile);
            Webinar::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'hp' => $request->hp,
                'instansi' => $request->instansi,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'file_tp' => $namafile
            ]);
        }
        return redirect('/registration/webinar')->with('success', 'Data telah Terkirim..!')->withInput();
    }

    public function force()
    {
        return view('comingsoon');
    }
}
