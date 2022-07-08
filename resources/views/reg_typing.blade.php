@extends('Layouts.index')
@section('content')
    @php
    if (null !== session()->get('_old_input')) {
        $jk = session()->get('_old_input');
    } else {
        $jk = [
            'jenis_kelamin' => 'L',
        ];
    }
    @endphp
    <!-- Perlombaan -->
    <div class="mx-4 p-5 mt-6 rounded-md border-2 border-slate-600 glass-white min-h-screen">
        <h2 class="text-2xl lg:text-3xl font-semibold text-center mb-5">PENDAFTARAN TYPING MASTER<br>FANATIK
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
                <form action="/registration/typing" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama
                            Peserta</label>
                        @error('nama')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Jenis Kelamin
                            Peserta</label>
                        @error('jenis_kelamin')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <select
                            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal      text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="Default select example" name="jenis_kelamin" required>
                            <option value="L" @if ($jk['jenis_kelamin'] == 'L') selected @endif>Laki-laki</option>
                            <option value="P" @if ($jk['jenis_kelamin'] == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Email
                            Peserta</label>
                        @error('email')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">No HP
                            Peserta</label>
                        @error('hp')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                No.HP is required</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan No HP" name="hp" value="{{ old('hp') }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label inline-block mb-2 text-gray-700">Sekolah Asal
                            Peserta</label>
                        @error('instansi')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">The
                                sekolah is required</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="nama" placeholder="Masukkan Instansi" name="instansi" value="{{ old('instansi') }}"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label inline-block mb-2 text-gray-700">Alamat
                            Peserta</label>
                        @error('alamat')
                            <span
                                class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{ old('alamat') }}"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="tp" class="form-label inline-block mb-2 text-gray-700">KTM/NISN
                            Peserta</label>

                        @error('file_tp')
                            <span
                                class="z-20 text-xs block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded float-right">{{ $message }}</span>
                        @enderror
                        <input type="file"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                            id="tp" name="file_tp" value="{{ old('file_tp') }}" required />
                        <div
                            class="text-[.75rem] block w-max relative -top-7 float-right mr-2 text-right font-light text-gray-400 -mb-[18px]">
                            Image < 2MB</div>
                        </div>
                        <div class="mb-3">
                            <label for="bp" class="form-label inline-block mb-2 text-gray-700">Bukti Pembayaran
                                Peserta
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
                            <button type="submit"
                                class="w-full inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6">
                                Kirim
                            </button>
                            <h4 class="text-xs text-red-500 font-bold indent-0 py-6">
                                Note: Dengan Mendaftar Anda Menyetujui Syarat dan Ketentuan!
                            </h4>
                </form>
            </div>
            <div
                class="order-1 flex-1 basis-6/12 p-2 lg:px-4 text-justify leading-relaxed space-y-2 lg:pr-10 lg:border-r-2 border-dashed">
                <h4 class="text-center text-xl">Syarat dan Ketentuan</h4>
                <ul class="list-disc space-y-2">
                    <li>Peserta merupakan pelajar SMA / Sederajat atau Mahasiswa yang masih aktif bersekolah, ditunjukkan dengan
                        melampirkan fotokopi atau scanning kartu pelajar / mahasiswa di form pendaftaran.</li>
                    <li><span>Biaya Pendaftaran : Rp 25.000,-</span><br><span>Pendaftaran Dapat Melalui
                            Rekening: 7144140553 (M Fauzul Shalis)</span><br><span>Atau Melalui Dana: 085161123045 (Dzikri Arraiyan)</span></li>
                    <li>Mengisi formulir pendaftaran melalui link pendaftaran yang telah disediakan oleh panitia</li>
                </ul>
            </div>
            {{-- <div></div> --}}
        </div>
    </div><br>
    <span class="w-full h-0" id="bazar"></span>
@endsection
