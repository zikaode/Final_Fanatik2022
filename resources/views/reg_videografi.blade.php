@extends('Layouts.index')
@section('content')
    @php
    if (null !== session()->get('_old_input')) {
        $ss = session()->get('_old_input');
    } else {
        $ss = [
            'jenis_kelamin_1' => 'L',
            'jenis_kelamin_2' => 'L',
            'jenis_kelamin_3' => 'L',
            'upload_opt' => 'less',
            'jml_ps' => '2',
        ];
    }
    @endphp
    <!-- Perlombaan -->
    <div class="mx-4 p-5 mt-6 rounded-md border-2 border-slate-600 glass-white min-h-screen">
        <h2 class="text-2xl lg:text-3xl font-semibold text-center mb-5">PENDAFTARAN VIDEOGRAFI<br>FANATIK
            2022
            <hr class="mt-5">
        </h2>
        <div class="flex w-full h-full justify-between gap-4 flex-col lg:flex-row">
            <div class="flex-1 basis-6/12 space-y-4 order-2">
                <h4 class="text-center text-xl">Form Pendaftaran</h4>
                @if (session()->has('success'))
                    <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
                        <h4 class="text-2xl font-medium leading-tight mb-2">Data Terkirim</h4>
                        <p class="mb-4">
                            Pendaftaran anda telah direkam. data akan diproses setelah dikonfirmasi, email akan dikirim ke
                            anda..
                        </p>
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700" role="alert">
                        <h4 class="text-2xl font-medium leading-tight mb-2">Data Tidak Terkirim</h4>
                        <p class="mb-4">
                            Pendaftaran anda telah gagal direkam karena beberapa hal, Coba ulangi lagi..
                        </p>
                    </div>
                @endif
                <form action="/registration/videography" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_kl" class="form-label inline-block mb-2 text-gray-700">Nama
                            Kelompok</label>
                        @error('nama_kl')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama_kl" placeholder="Masukkan Nama" name="nama_kl" value="{{ old('nama_kl') }}"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="jml_ps" class="form-label inline-block mb-2 text-gray-700">Jumlah Anggota Dalam
                            Kelompok</label>
                        <select
                            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="Default select example" name="jml_ps" id="jml_ps" required>
                            <option value="2" @if ($ss['jml_ps'] == '2') selected @endif>Dua Anggota</option>
                            <option value="3" @if ($ss['jml_ps'] == '3') selected @endif>Tiga Anggota</option>
                        </select>
                    </div>
                    <hr><br>
                    <h2 class="text-center text-lg">Paserta Pertama (Ketua)</h2>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                            Peserta</label>
                        @error('nama_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Nama" name="nama_1" value="{{ old('nama_1') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Jenis Kelamin
                            Peserta</label>
                        @error('jenis_kelamin_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <select
                            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal      text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="Default select example" name="jenis_kelamin_1" required>
                            <option value="L" @if ($ss['jenis_kelamin_1'] == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if ($ss['jenis_kelamin_1'] == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Email
                            Peserta</label>
                        @error('email_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Email" name="email_1" value="{{ old('email_1') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">No HP
                            Peserta</label>
                        @error('hp_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                No.HP is required</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan No HP" name="hp_1" value="{{ old('hp_1') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Sekolah Asal
                            Peserta</label>
                        @error('instansi_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                sekolah is required</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Instansi" name="instansi_1" value="{{ old('instansi_1') }}"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label inline-block mb-2 text-gray-700">Alamat
                            Peserta</label>
                        @error('alamat_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="alamat" placeholder="Masukkan alamat" name="alamat_1" value="{{ old('alamat_1') }}"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="ig" class="form-label inline-block mb-2 text-gray-700">Instagram
                            Peserta</label>
                        @error('ig_1')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="ig" placeholder="Masukkan Instagram" name="ig_1" value="{{ old('ig_1') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="tp" class="form-label inline-block mb-2 text-gray-700">KTM/NISN
                            Peserta</label>

                        @error('file_tp_1')
                            <span
                                class="z-20 text-xs block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="file"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="tp" name="file_tp_1" value="{{ old('file_tp_1') }}" required />
                        <div
                            class="text-[.75rem] block w-max relative -top-7 float-right mr-2 text-right font-light text-gray-400 -mb-[18px]">
                            Image < 2MB</div>
                        </div>
                        <hr><br>
                        <h2 class="text-center text-lg">Paserta Kedua</h2>
                        <div class="mb-3">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                                Peserta</label>
                            @error('nama_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="nama" placeholder="Masukkan Nama" name="nama_2" value="{{ old('nama_2') }}"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Jenis Kelamin
                                Peserta</label>
                            @error('jenis_kelamin_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <select
                                class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal      text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="Default select example" name="jenis_kelamin_2" required>
                                <option value="L" @if ($ss['jenis_kelamin_2'] == 'L') selected @endif>Laki-laki</option>
                                <option value="P" @if ($ss['jenis_kelamin_2'] == 'P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Email
                                Peserta</label>
                            @error('email_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="nama" placeholder="Masukkan Email" name="email_2" value="{{ old('email_2') }}"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">No HP
                                Peserta</label>
                            @error('hp_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                    No.HP is required</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="nama" placeholder="Masukkan No HP" name="hp_2" value="{{ old('hp_2') }}" required />
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label inline-block mb-2 text-gray-700">Sekolah Asal
                                Peserta</label>
                            @error('instansi_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                    sekolah is required</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="nama" placeholder="Masukkan Instansi" name="instansi_2"
                                value="{{ old('instansi_2') }}" required />
                        </div>
                        <div class="mb-3">
                            <label for="alamat_2" class="form-label inline-block mb-2 text-gray-700">Alamat
                                Peserta</label>
                            @error('alamat')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="alamat" placeholder="Masukkan alamat" name="alamat_2" value="{{ old('alamat_2') }}"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="ig" class="form-label inline-block mb-2 text-gray-700">Instagram
                                Peserta</label>
                            @error('ig_2')
                                <span
                                    class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <input type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="ig" placeholder="Masukkan Instagram" name="ig_2" value="{{ old('ig_2') }}"
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="tp" class="form-label inline-block mb-2 text-gray-700">KTM/NISN
                                Peserta</label>

                            @error('file_tp_2')
                                <span
                                    class="z-20 text-xs block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                            @enderror
                            <input type="file"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                id="tp" name="file_tp_2" value="{{ old('file_tp_2') }}" required />
                            <div
                                class="text-[.75rem] block w-max relative -top-7 float-right mr-2 text-right font-light text-gray-400 -mb-[18px]">
                                Image < 2MB</div>
                            </div>
                            <hr><br>
                            <div id="ketiga">
                                <div>
                                    <h2 class="text-center text-lg">Paserta Ketiga</h2>
                                    <span></span>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                                        Peserta</label>
                                    @error('nama_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="nama" placeholder="Masukkan Nama" name="nama_3" value="{{ old('nama_3') }}"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label inline-block mb-2 text-gray-700">Jenis Kelamin
                                        Peserta</label>
                                    @error('jenis_kelamin_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <select
                                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal      text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        aria-label="Default select example" name="jenis_kelamin_3" required>
                                        <option value="L" @if ($ss['jenis_kelamin_3'] == 'L') selected @endif>Laki-laki
                                        </option>
                                        <option value="P" @if ($ss['jenis_kelamin_3'] == 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label inline-block mb-2 text-gray-700">Email
                                        Peserta</label>
                                    @error('email_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="nama" placeholder="Masukkan Email" name="email_3"
                                        value="{{ old('email_3') }}" required />
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label inline-block mb-2 text-gray-700">No HP
                                        Peserta</label>
                                    @error('hp_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                            No.HP is required</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="nama" placeholder="Masukkan No HP" name="hp_3" value="{{ old('hp_3') }}"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label inline-block mb-2 text-gray-700">Sekolah Asal
                                        Peserta</label>
                                    @error('instansi_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                            sekolah is required</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="nama" placeholder="Masukkan Instansi" name="instansi_3"
                                        value="{{ old('instansi_3') }}" required />
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label inline-block mb-2 text-gray-700">Alamat
                                        Peserta</label>
                                    @error('alamat_3')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="alamat" placeholder="Masukkan alamat" name="alamat_3"
                                        value="{{ old('alamat_3') }}" required />
                                </div>
                                <div class="mb-3">
                                    <label for="ig_3" class="form-label inline-block mb-2 text-gray-700">Instagram
                                        Peserta</label>
                                    @error('ig')
                                        <span
                                            class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="ig" placeholder="Masukkan Instagram" name="ig_3" value="{{ old('ig_3') }}"
                                        required />
                                </div>
                                <div class="mb-3">
                                    <label for="tp" class="form-label inline-block mb-2 text-gray-700">KTM/NISN
                                        Peserta</label>

                                    @error('file_tp_3')
                                        <span
                                            class="z-20 text-xs block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="file"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="tp" name="file_tp_3" value="{{ old('file_tp_3') }}" required />
                                    <div
                                        class="text-[.75rem] block w-max relative -top-7 float-right mr-2 text-right font-light text-gray-400 -mb-[18px]">
                                        Image < 2MB</div>
                                    </div>
                                    <div>
                                        <hr><br>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="bp" class="form-label inline-block mb-2 text-gray-700">Bukti Pembayaran
                                        Kelompok
                                    </label>
                                    @error('file_bp')
                                        <span
                                            class="z-20 text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                    @enderror
                                    <input type="file"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                        id="bp" name="file_bp" value="{{ old('file_bp') }}" required />
                                    <div
                                        class="text-[.75rem] block w-max relative -top-7 float-right mr-2 text-right font-light text-gray-400 -mb-[18px]">
                                        Image < 2MB</div>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Upload File
                                            Karya
                                            Kelompok</label>
                                        <select
                                            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            aria-label="Default select example" name="upload_opt" id="upload_opt" required>
                                            <option value="less" @if ($ss['upload_opt'] == 'less') selected @endif>File
                                                Upload < 50 MB</option>
                                            <option value="more" @if ($ss['upload_opt'] == 'more') selected @endif>File
                                                Upload >
                                                50
                                                MB</option>
                                        </select>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="drive" class="form-label inline-block mb-2 text-gray-700">Karya
                                            Kelompok -
                                            Google Drive</label>
                                        @error('drive')
                                            <span
                                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                        @enderror
                                        <input type="text"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                            id="drive" name="drive" placeholder="Masukkan Url Google Drive"
                                            value="{{ old('drive') }}" required />
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="kr" class="form-label inline-block mb-2 text-gray-700">Karya
                                            Kelompok
                                        </label>
                                        @error('file_kr')
                                            <span
                                                class="z-20 text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                                        @enderror
                                        <input type="file"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                            id="kr" name="file_kr" value="{{ old('file_kr') }}" required />
                                        <div
                                            class="text-[.75rem] relative w-max -top-7 float-right mr-2 font-light block text-right text-gray-400 -mb-[18px]">
                                            Video < 50MB</div>
                                        </div> --}}
                                    <div class="form-check">
                                        <input
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="checkbox" name="confirm_ori" value="confirm_ori" id="orisinil">
                                        <label class="form-check-label inline-block text-gray-800" for="orisinil">
                                            Menyatakan Bahwa Karya Ini Orisinil.
                                        </label>
                                    </div>
                                    <button type="submit"
                                        class="w-full inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6 man_disable"
                                        id="submit" disabled>
                                        Kirim
                                    </button>
                                    <h4 class="text-xs text-red-500 font-bold indent-0 py-6">
                                        Note: <br>-. Dengan Mendaftar Anda Menyetujui Syarat dan Ketentuan!
                                        <br>-. Upload Pada Drive, Pastikan File Bersifat Publik!<br>
                                    </h4>
                </form>
            </div>
            <div
                class="order-1 flex-1 basis-6/12 p-2 lg:px-4 text-justify leading-relaxed space-y-2 lg:pr-10 lg:border-r-2 border-dashed">
                <h4 class="text-center text-xl">Syarat dan Ketentuan</h4>
                <ul class="list-disc space-y-2">
                    <li>Peserta merupakan pelajar SMA / Sederajat atau Mahasiswa yang masih aktif bersekolah, ditunjukkan dengan
                        melampirkan scanning kartu pelajar / mahasiswa di form pendaftaran.</li>
                    <li>1 Grup berisikan 2-3 orang peserta</li>
                    <li><span>Biaya Pendaftaran : Rp 30.000,-</span><br><span>Pendaftaran Dapat Melalui
                            Rekening: 7144140553 (M Fauzul Shalis)</span><br><span>Atau Melalui Dana: 085161123045 (Dzikri Arraiyan)</span></li>
                    <li>Karya peserta orisinil milik sendiri dan tidak berasal dari hasil yang sudah diperlombakan</li>
                    <li>Video berjenis bebas berdurasi 3 menit dan sesuai tema yang ditetapkan.</li>
                    <li>Resolusi video minimal 720p.</li>
                    <li>Hasil video dari setiap peserta di upload ke Instagram, jangan lupa tag ig @himatikpnl dan 5
                        temanmu, deskripsikan karya melalui caption semenarik mungkin</li>
                    <li>Mengisi formulir pendaftaran melalui link yang telah disediakan oleh panitia.</li>
                </ul>
            </div>
            {{-- <div></div> --}}
        </div>
    </div><br>
    <span class="w-full h-0" id="bazar"></span>
@endsection
@section('script')
    <script>
        // const upload_opt = document.getElementById('upload_opt');
        // const drive = document.getElementById('drive');
        // const kr = document.getElementById('kr');
        // setInterval(() => {
        //     if (upload_opt.value === "less") {
        //         drive.parentElement.classList.add("hidden");
        //         drive.removeAttribute("required");
        //         drive.removeAttribute("name");

        //         kr.parentElement.classList.remove("hidden");
        //         kr.setAttribute("required", "");
        //         kr.setAttribute("name", "file_kr");
        //     } else if (upload_opt.value === "more") {
        //         kr.parentElement.classList.add("hidden");
        //         kr.removeAttribute("required");
        //         kr.removeAttribute("name");

        //         drive.parentElement.classList.remove("hidden");
        //         drive.setAttribute("required", "");
        //         drive.setAttribute("name", "drive");

        //     }
        // }, 500);
        const jml_ps = document.getElementById('jml_ps');
        const ketiga = document.getElementById('ketiga');
        const ketiga_child = document.getElementById("ketiga").children;
        setInterval(() => {
            if (jml_ps.value === "2") {
                ketiga.classList.add("hidden");
                for (let i = 0; i < ketiga_child.length; i++) {
                    ketiga_child[i].children[1].removeAttribute("required", "");
                }
            } else if (jml_ps.value === "3") {
                ketiga.classList.remove("hidden");
                for (let i = 0; i < ketiga_child.length; i++) {
                    ketiga_child[i].children[1].setAttribute("required", "");
                }
            }
        }, 500);

        const checkbox_ori = document.getElementById('orisinil');
        const submit = document.getElementById('submit');

        setInterval(() => {
            if (checkbox_ori.checked) {
                if (submit.classList.contains("man_disable") || submit.hasAttribute("disabled")) {
                    submit.classList.remove("man_disable");
                    submit.removeAttribute("disabled", "");
                }
            } else {
                if (!submit.classList.contains("man_disable") || !submit.hasAttribute("disabled")) {
                    submit.classList.add("man_disable");
                    submit.setAttribute("disabled", "");
                }
            }
        }, 200);
    </script>
@endsection
