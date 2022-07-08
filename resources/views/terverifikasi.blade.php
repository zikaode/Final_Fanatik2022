@extends('Layouts.admin')
@section('content')
    <div class="max-h-[calc(79.35vh)] min-h-[calc(79.35vh)] flex">
        @include('Partials.side')
        <div class="flex-initial bg-white basis-10/12 p-4 overflow-y-auto">
            <h1 class="text-3xl font-semibold">Daftar Peserta {{ $cabang }} Terverifikasi..</h1>
            <br>
            <hr>
            <h1 class="text-lg text-center pt-4">- {{ Str::upper($cabang) }} -</h1>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                                <thead class="border-b bg-gray-800">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            #
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Nama
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Email
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            No. HP
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Status
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Tanda Pengenal
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Bukti Pembayaran
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Karya
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>
                                    @forelse ($list as $item)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->nama }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->jenis_kelamin }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->email }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->hp }}
                                            </td>
                                            <td class="text-sm text-green-600 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $item->status }}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="/storage/images/tanda_pengenal/{{ $item->file_tp }}"
                                                    target="_blank"
                                                    class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Lihat</a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="/storage/images/bukti_pembayaran/{{ $item->file_bp }}"
                                                    target="_blank"
                                                    class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Lihat</a>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <a href="/storage/images/karya/kti/{{ $item->file_kr }}" target="_blank"
                                                    class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Lihat</a>
                                            </td>
                                        </tr class="bg-white border-b">
                                    @empty
                                        <td colspan="10"
                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                            Tidak Ada Record
                                        </td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
