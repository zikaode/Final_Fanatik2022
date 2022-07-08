<?php

namespace App\Http\Controllers;

use App\Models\Fotografi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closed = DB::table('configuration')->where('kunci', 'tutup')->get();
        if (time() < strtotime($closed[0]->nilai)) { // + strtotime("01 April 2022")
            return view('reg_fotografi');
        } else {
            return "Pendaftaran Ditutup!";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('file_tp') && $request->has('file_bp') && $request->has('file_kr')) {
            $validated = $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'hp' => 'required|alpha_num',
                'instansi' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'jenis_kelamin' => 'required',
                'ig' => 'required',
                'file_tp' => 'required|mimes:jpg,png,jpeg|max:2048',
                'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                'file_kr' => 'required|mimes:png,jpg,jpeg|max:10192'
            ]);
            $namafile_tp = date('smh:j-m-y', time()) . '-tp-' . $request->nama . '.' . $request->file('file_tp')->extension();
            $request->file('file_tp')->storeAs('images/tanda_pengenal', $namafile_tp);
            $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama . '.' . $request->file('file_bp')->extension();
            $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);
            $namafile_kr = date('smh:j-m-y', time()) . '-kr-' . $request->nama . '.' . $request->file('file_kr')->extension();
            $request->file('file_kr')->storeAs('images/karya/fotografi', $namafile_kr);

            $fotografiInsert = Fotografi::make([
                'nama' => $request->nama,
                'email' => $request->email,
                'hp' => $request->hp,
                'instansi' => $request->instansi,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'ig' => $request->ig,
                'status' => 'pending',
                'deskripsi' => $request->deskripsi,
                'file_tp' => $namafile_tp,
                'file_bp' => $namafile_bp,  
                'file_kr' => $namafile_kr,
            ]);
            if ($fotografiInsert->save()) {
                return redirect('/registration/photography')->with('success', 'Data telah Terkirim..!')->withInput();
            } else {
                return redirect('/registration/photography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
            }
        } else if ($request->has('file_tp') && $request->has('file_bp') && $request->has('drive')) {
            $validated = $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'hp' => 'required|alpha_num',
                'instansi' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'ig' => 'required',
                'deskripsi' => 'required',
                'file_tp' => 'required|mimes:jpg,png,jpeg|max:2048',
                'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                'drive' => 'required'
            ]);
            $namafile_tp = date('smh:j-m-y', time()) . '-tp-' . $request->nama . '.' . $request->file('file_tp')->extension();
            $request->file('file_tp')->storeAs('images/tanda_pengenal', $namafile_tp);
            $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama . '.' . $request->file('file_bp')->extension();
            $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);
            $fotografiInsert = Fotografi::make([
                'nama' => $request->nama,
                'email' => $request->email,
                'hp' => $request->hp,
                'instansi' => $request->instansi,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'ig' => $request->ig,
                'status' => 'pending',
                'deskripsi' => $request->deskripsi,
                'file_tp' => $namafile_tp,
                'file_bp' => $namafile_bp,
                'file_kr' => $request->drive,
            ]);
            if ($fotografiInsert->save()) {
                return redirect('/registration/photography')->with('success', 'Data telah Terkirim..!')->withInput();
            } else {
                return redirect('/registration/photography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
            }
        } else {
            return redirect('/registration/photography')->with('failed', 'Data tidak Terkirim..!')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
