@component('mail::message')
# Pendaftaran Anda Berhasil..
<br>
<h1 style="text-align:center">Karya Tulis Ilmiah</h1>

@component('mail::table')
|               |               |
| ------------- |--------------:|
| Urutan Pendaftaran| {{ $temp->id }}|
| Nama      | {{ $temp->nama }}      |
| Instansi      | {{ $temp->instansi }} |
| Alamat| {{ $temp->alamat }}|
@endcomponent

<h2 style="text-align: right">Terdaftar Pada Tanggal {{ now() }}</h2>

@component('mail::panel')
Silahkan simpan email ini sebagai bukti pendaftaran..
@endcomponent

Kesekretariatan,<br>
{{ config('app.name') }}
@endcomponent
