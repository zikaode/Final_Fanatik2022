@extends('Layouts.admin')
@section('content')
    <div class="max-h-[calc(79.35vh)] min-h-[calc(79.35vh)] flex">
        @include('Partials.side')
        <div class="flex-initial bg-white basis-10/12 p-4 overflow-y-auto">
            @if (session()->has('success'))
                <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
                    <p>
                        Data '{{ session()->get('success') }}' Berhasil Di-Update..!
                    </p>
                </div>
            @endif
            <h1 class="text-2xl font-semibold mb-2 p-2"> PENGATURAN </h1>
            <div class="w-full p-2">
                <form action="pengaturan/tutup" method="post">
                    @csrf
                    <h2 class="text-lg inline-block">Tanggal Penutupan Pendaftaran :</h2>
                    <input type="date" name="tutup" value="{{ $config[0]->nilai }}">
                    <button
                        class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out ml-6"
                        type="submit">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
