<?php

namespace App\Http\Controllers;

use App\Models\Videografi;
use Illuminate\Http\Request;
use App\Models\KlmVideografi;
use Illuminate\Support\Facades\DB;

class VideografisController extends Controller
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
            return view('reg_videografi');
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
        if ($request->jml_ps == "2") {
            // Jumlah Peserta 2
            if ($request->has('file_tp_1') && $request->has('file_tp_2') && $request->has('file_bp') && $request->has('file_kr')) {
                $validated = $request->validate([
                    'nama_kl' => 'required|unique:klm_videografis,nama_kelompok',
                    'nama_1' => 'required',
                    'email_1' => 'required|email',
                    'hp_1' => 'required|alpha_num',
                    'instansi_1' => 'required',
                    'alamat_1' => 'required',
                    'jenis_kelamin_1' => 'required',
                    'ig_1' => 'required',
                    'file_tp_1' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_2' => 'required',
                    'email_2' => 'required|email',
                    'hp_2' => 'required|alpha_num',
                    'instansi_2' => 'required',
                    'alamat_2' => 'required',
                    'jenis_kelamin_2' => 'required',
                    'ig_2' => 'required',
                    'file_tp_2' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_kr' => 'required|mimes:mp4,mkv,avi,webm|max:51240'
                ]);
                $namafile_tp_1 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_1 . '.' . $request->file('file_tp_1')->extension();
                $request->file('file_tp_1')->storeAs('images/tanda_pengenal', $namafile_tp_1);
                $namafile_tp_2 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_2 . '.' . $request->file('file_tp_2')->extension();
                $request->file('file_tp_2')->storeAs('images/tanda_pengenal', $namafile_tp_2);
                $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama_kl . '.' . $request->file('file_bp')->extension();
                $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);
                $namafile_kr = date('smh:j-m-y', time()) . '-kr-' . $request->nama_kl . '.' . $request->file('file_kr')->extension();
                $request->file('file_kr')->storeAs('images/karya/videografi', $namafile_kr);

                $kelompok = KlmVideografi::make([
                    'nama_kelompok' => $request->nama_kl,
                    'file_bp' => $namafile_bp,
                    'file_kr' => $namafile_kr,
                    'status' => 'pending',
                    'email_ketua' => $request->email_1,
                ]);
                if ($kelompok->save()) {
                    $id_kelompok = KlmVideografi::where('nama_kelompok', $request->nama_kl)->first();
                    $fotografiInsert_1 = Videografi::make([
                        'nama' => $request->nama_1,
                        'email' => $request->email_1,
                        'hp' => $request->hp_1,
                        'instansi' => $request->instansi_1,
                        'alamat' => $request->alamat_1,
                        'jenis_kelamin' => $request->jenis_kelamin_1,
                        'ig' => $request->ig_1,
                        'file_tp' => $namafile_tp_1,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_2 = Videografi::make([
                        'nama' => $request->nama_2,
                        'email' => $request->email_2,
                        'hp' => $request->hp_2,
                        'instansi' => $request->instansi_2,
                        'alamat' => $request->alamat_2,
                        'jenis_kelamin' => $request->jenis_kelamin_2,
                        'ig' => $request->ig_2,
                        'file_tp' => $namafile_tp_2,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    if ($fotografiInsert_1->save() && $fotografiInsert_2->save()) {
                        return redirect('/registration/videography')->with('success', 'Data telah Terkirim..!')->withInput();
                    } else {
                        return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                    }
                } else {
                    return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                }
            } else if ($request->has('file_tp_1') && $request->has('file_tp_2') && $request->has('file_bp') && $request->has('drive')) {
                $validated = $request->validate([
                    'nama_kl' => 'required|unique:klm_videografis,nama_kelompok',
                    'nama_1' => 'required',
                    'email_1' => 'required|email',
                    'hp_1' => 'required|alpha_num',
                    'instansi_1' => 'required',
                    'alamat_1' => 'required',
                    'jenis_kelamin_1' => 'required',
                    'ig_1' => 'required',
                    'file_tp_1' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_2' => 'required',
                    'email_2' => 'required|email',
                    'hp_2' => 'required|alpha_num',
                    'instansi_2' => 'required',
                    'alamat_2' => 'required',
                    'jenis_kelamin_2' => 'required',
                    'ig_2' => 'required',
                    'file_tp_2' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'drive' => 'required'
                ]);
                $namafile_tp_1 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_1 . '.' . $request->file('file_tp_1')->extension();
                $request->file('file_tp_1')->storeAs('images/tanda_pengenal', $namafile_tp_1);
                $namafile_tp_2 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_2 . '.' . $request->file('file_tp_2')->extension();
                $request->file('file_tp_2')->storeAs('images/tanda_pengenal', $namafile_tp_2);
                $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama_kl . '.' . $request->file('file_bp')->extension();
                $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);

                $kelompok = KlmVideografi::make([
                    'nama_kelompok' => $request->nama_kl,
                    'file_bp' => $namafile_bp,
                    'file_kr' => $request->drive,
                    'status' => 'pending',
                    'email_ketua' => $request->email_1,
                ]);
                if ($kelompok->save()) {
                    $id_kelompok = KlmVideografi::where('nama_kelompok', $request->nama_kl)->first();
                    $fotografiInsert_1 = Videografi::make([
                        'nama' => $request->nama_1,
                        'email' => $request->email_1,
                        'hp' => $request->hp_1,
                        'instansi' => $request->instansi_1,
                        'alamat' => $request->alamat_1,
                        'jenis_kelamin' => $request->jenis_kelamin_1,
                        'ig' => $request->ig_1,
                        'file_tp' => $namafile_tp_1,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_2 = Videografi::make([
                        'nama' => $request->nama_2,
                        'email' => $request->email_2,
                        'hp' => $request->hp_2,
                        'instansi' => $request->instansi_2,
                        'alamat' => $request->alamat_2,
                        'jenis_kelamin' => $request->jenis_kelamin_2,
                        'ig' => $request->ig_2,
                        'file_tp' => $namafile_tp_2,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    if ($fotografiInsert_1->save() && $fotografiInsert_2->save()) {
                        return redirect('/registration/videography')->with('success', 'Data telah Terkirim..!')->withInput();
                    } else {
                        return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                    }
                } else {
                    return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                }
            } else {
                return redirect('/registration/photography')->with('failed', 'Data tidak Terkirim..!')->withInput();
            }
        } else if ($request->jml_ps == "3") {
            // Jumlah Peserta 2
            if ($request->has('file_tp_1') && $request->has('file_tp_2') && $request->has('file_tp_3') && $request->has('file_bp') && $request->has('file_kr')) {
                $validated = $request->validate([
                    'nama_kl' => 'required|unique:klm_videografis,nama_kelompok',
                    'nama_1' => 'required',
                    'email_1' => 'required|email',
                    'hp_1' => 'required|alpha_num',
                    'instansi_1' => 'required',
                    'alamat_1' => 'required',
                    'jenis_kelamin_1' => 'required',
                    'ig_1' => 'required',
                    'file_tp_1' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_2' => 'required',
                    'email_2' => 'required|email',
                    'hp_2' => 'required|alpha_num',
                    'instansi_2' => 'required',
                    'alamat_2' => 'required',
                    'jenis_kelamin_2' => 'required',
                    'ig_2' => 'required',
                    'file_tp_2' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_3' => 'required',
                    'email_3' => 'required|email',
                    'hp_3' => 'required|alpha_num',
                    'instansi_3' => 'required',
                    'alamat_3' => 'required',
                    'jenis_kelamin_3' => 'required',
                    'ig_3' => 'required',
                    'file_tp_3' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_kr' => 'required|mimes:mp4,mkv,avi,webm|max:51240'
                ]);
                $namafile_tp_1 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_1 . '.' . $request->file('file_tp_1')->extension();
                $request->file('file_tp_1')->storeAs('images/tanda_pengenal', $namafile_tp_1);
                $namafile_tp_2 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_2 . '.' . $request->file('file_tp_2')->extension();
                $request->file('file_tp_2')->storeAs('images/tanda_pengenal', $namafile_tp_2);
                $namafile_tp_3 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_3 . '.' . $request->file('file_tp_3')->extension();
                $request->file('file_tp_3')->storeAs('images/tanda_pengenal', $namafile_tp_3);
                $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama_kl . '.' . $request->file('file_bp')->extension();
                $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);
                $namafile_kr = date('smh:j-m-y', time()) . '-kr-' . $request->nama_kl . '.' . $request->file('file_kr')->extension();
                $request->file('file_kr')->storeAs('images/karya/videografi', $namafile_kr);

                $kelompok = KlmVideografi::make([
                    'nama_kelompok' => $request->nama_kl,
                    'file_bp' => $namafile_bp,
                    'file_kr' => $namafile_kr,
                    'status' => 'pending',
                    'email_ketua' => $request->email_1,
                ]);
                if ($kelompok->save()) {
                    $id_kelompok = KlmVideografi::where('nama_kelompok', $request->nama_kl)->first();
                    $fotografiInsert_1 = Videografi::make([
                        'nama' => $request->nama_1,
                        'email' => $request->email_1,
                        'hp' => $request->hp_1,
                        'instansi' => $request->instansi_1,
                        'alamat' => $request->alamat_1,
                        'jenis_kelamin' => $request->jenis_kelamin_1,
                        'ig' => $request->ig_1,
                        'file_tp' => $namafile_tp_1,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_2 = Videografi::make([
                        'nama' => $request->nama_2,
                        'email' => $request->email_2,
                        'hp' => $request->hp_2,
                        'instansi' => $request->instansi_2,
                        'alamat' => $request->alamat_2,
                        'jenis_kelamin' => $request->jenis_kelamin_2,
                        'ig' => $request->ig_2,
                        'file_tp' => $namafile_tp_2,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_3 = Videografi::make([
                        'nama' => $request->nama_3,
                        'email' => $request->email_3,
                        'hp' => $request->hp_3,
                        'instansi' => $request->instansi_3,
                        'alamat' => $request->alamat_3,
                        'jenis_kelamin' => $request->jenis_kelamin_3,
                        'ig' => $request->ig_3,
                        'file_tp' => $namafile_tp_3,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    if ($fotografiInsert_1->save() && $fotografiInsert_2->save() && $fotografiInsert_3->save()) {
                        return redirect('/registration/videography')->with('success', 'Data telah Terkirim..!')->withInput();
                    } else {
                        return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                    }
                } else {
                    return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                }
            } else if ($request->has('file_tp_1') && $request->has('file_tp_2') && $request->has('file_tp_3') && $request->has('file_bp') && $request->has('drive')) {
                $validated = $request->validate([
                    'nama_kl' => 'required|unique:klm_videografis,nama_kelompok',
                    'nama_1' => 'required',
                    'email_1' => 'required|email',
                    'hp_1' => 'required|alpha_num',
                    'instansi_1' => 'required',
                    'alamat_1' => 'required',
                    'jenis_kelamin_1' => 'required',
                    'ig_1' => 'required',
                    'file_tp_1' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_2' => 'required',
                    'email_2' => 'required|email',
                    'hp_2' => 'required|alpha_num',
                    'instansi_2' => 'required',
                    'alamat_2' => 'required',
                    'jenis_kelamin_2' => 'required',
                    'ig_2' => 'required',
                    'file_tp_2' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'nama_3' => 'required',
                    'email_3' => 'required|email',
                    'hp_3' => 'required|alpha_num',
                    'instansi_3' => 'required',
                    'alamat_3' => 'required',
                    'jenis_kelamin_3' => 'required',
                    'ig_3' => 'required',
                    'file_tp_3' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'file_bp' => 'required|mimes:jpg,png,jpeg|max:2048',
                    'drive' => 'required'
                ]);
                $namafile_tp_1 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_1 . '.' . $request->file('file_tp_1')->extension();
                $request->file('file_tp_1')->storeAs('images/tanda_pengenal', $namafile_tp_1);
                $namafile_tp_2 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_2 . '.' . $request->file('file_tp_2')->extension();
                $request->file('file_tp_2')->storeAs('images/tanda_pengenal', $namafile_tp_2);
                $namafile_tp_3 = date('smh:j-m-y', time()) . '-tp-' . $request->nama_3 . '.' . $request->file('file_tp_3')->extension();
                $request->file('file_tp_3')->storeAs('images/tanda_pengenal', $namafile_tp_3);
                $namafile_bp = date('smh:j-m-y', time()) . '-bp-' . $request->nama_kl . '.' . $request->file('file_bp')->extension();
                $request->file('file_bp')->storeAs('images/bukti_pembayaran', $namafile_bp);

                $kelompok = KlmVideografi::make([
                    'nama_kelompok' => $request->nama_kl,
                    'file_bp' => $namafile_bp,
                    'file_kr' => $request->drive,
                    'status' => 'pending',
                    'email_ketua' => $request->email_1,
                ]);
                if ($kelompok->save()) {
                    $id_kelompok = KlmVideografi::where('nama_kelompok', $request->nama_kl)->first();
                    $fotografiInsert_1 = Videografi::make([
                        'nama' => $request->nama_1,
                        'email' => $request->email_1,
                        'hp' => $request->hp_1,
                        'instansi' => $request->instansi_1,
                        'alamat' => $request->alamat_1,
                        'jenis_kelamin' => $request->jenis_kelamin_1,
                        'ig' => $request->ig_1,
                        'file_tp' => $namafile_tp_1,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_2 = Videografi::make([
                        'nama' => $request->nama_2,
                        'email' => $request->email_2,
                        'hp' => $request->hp_2,
                        'instansi' => $request->instansi_2,
                        'alamat' => $request->alamat_2,
                        'jenis_kelamin' => $request->jenis_kelamin_2,
                        'ig' => $request->ig_2,
                        'file_tp' => $namafile_tp_2,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    $fotografiInsert_3 = Videografi::make([
                        'nama' => $request->nama_3,
                        'email' => $request->email_3,
                        'hp' => $request->hp_3,
                        'instansi' => $request->instansi_3,
                        'alamat' => $request->alamat_3,
                        'jenis_kelamin' => $request->jenis_kelamin_3,
                        'ig' => $request->ig_3,
                        'file_tp' => $namafile_tp_3,
                        'klm_videografis_id' => $id_kelompok->id
                    ]);
                    if ($fotografiInsert_1->save() && $fotografiInsert_2->save() && $fotografiInsert_3->save()) {
                        return redirect('/registration/videography')->with('success', 'Data telah Terkirim..!')->withInput();
                    } else {
                        return redirect('/registration/videography')->with('failed', 'Data Tidak Terkirim..!')->withInput();
                    }
                } else {
                    return redirect('/registration/photography')->with('failed', 'Data tidak Terkirim..!')->withInput();
                }
            } else {
                return redirect('/registration/photography')->with('failed', 'Data tidak Terkirim..!')->withInput();
            }
        }
        return redirect('/registration/photography')->with('failed', 'Data tidak Terkirim..!')->withInput();
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
