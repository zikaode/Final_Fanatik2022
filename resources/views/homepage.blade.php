@extends('Layouts.index')
@section('content')
    @include('Partials.hero'){{-- Seminar/Webinar --}}<div class="mx-4 md:mx-8 lg:mx-10 mt-16 overflow-x-hidden">
        <div class="p-5 md:p-8 lg:p-10 rounded-md border-2 border-slate-600 flex flex-col lg:flex-row gap-8 glass-white">
            <div class="flex-initial basis-3/5">
                <h2 class="text-lg md:text-2xl lg:text-3xl font-semibold text-center md:text-left">SEMINAR / WEBINAR NASIONAL
                </h2>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quasi, quod! Sunt esse minima dolorum similique? Maxime excepturi in nam
                    unde quaerat distinctio, voluptate ipsa eaque iste obcaecati officia reprehenderit dicta!</p><a
                    type="button"
                    class="hidden lg:inline-block text-sm px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                    href="/registration/webinar">Daftar Webinar Sekarang</a>
            </div>
            <div class="flex-initial basis-2/5">
                <h2 class="text-md md:text-lg font-medium text-center">PEMATERI SEMINAR</h2>
                <div class="flex gap-2 justify-evenly">
                    <div class="flex-initial flex items-center flex-col">
                        <div class="h-28 w-28 md:h-32 md:w-32 bg-user bg-center bg-cover shadow-md rounded-full mt-4"></div>
                        <p class="text-base md:text-md mt-6">Pemateri 1</p>
                        <p class="text-center text-xs md:text-sm mt-0">Job: -</p>
                    </div>
                    <div class="flex-initial flex items-center flex-col">
                        <div class="h-28 w-28 md:h-32 md:w-32 bg-user bg-center shadow-md bg-cover rounded-full mt-4"></div>
                        <p class="text-base md:text-md mt-6">Pemateri 2</p>
                        <p class="text-center text-xs md:text-sm mt-0">Job: -</p>
                    </div>
                </div>
            </div><a type="button"
                class="mx-auto text-sm block w-max lg:hidden px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out md:mt-6"
                href="/registration/webinar">Daftar Webinar Sekarang</a>
        </div>
    </div><span class="w-full h-0" id="lomba"></span>
    <div class="mx-4 md:mx-8 lg:mx-10 p-5 md:p-8 lg:p-10 mt-16 rounded-md border-2 border-slate-600 glass-white space-y-2">
        <h2 class="text-2xl lg:text-3xl font-semibold text-center mb-5">CONTEST</h2>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1">
                <h3 class="text-xl lg:text-2xl font-semibold">KARYA TULIS ILMIAH</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Pengembangan Teknologi Dalam Tatanan Baru
                    Indonesia Pasca Pandemic"</blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Kami dari fanatik berharap
                    dapat menjadi wadah terbaik untuk anak muda dalam menguji dan mengembangkan kemampuan menulis karya
                    tulis ilmiah guna menghasilkan anak muda yang penuh inspirasi.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="/registration/karya_tulis_ilmiah">Daftar Sekarang</a><a
                        class="absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Download Pedoman Contest"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" class="bi bi-download stroke-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-kti md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1 md:order-2">
                <h3 class="text-xl lg:text-2xl font-semibold">DESIGN POSTER</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Pemanfaatan Teknologi di Era New Normal"
                </blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Tunjukkan Kreatifitas dan
                    Inovasi kamu dalam kontes Design Poster yang akan diselenggarakan fanatik, Desainlah poster yang berisi
                    konten seperti infografis, illustrasi, dsb mengenai pemanfaatan teknologi di era new normal.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="order-2 mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="registration/poster">Daftar Sekarang</a><a
                        class="order-1 absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Download Pedoman Contest"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-download stroke-2" viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-poster md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1">
                <h3 class="text-xl lg:text-2xl font-semibold">TYPING MASTER</h3>{{-- <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"---------T-Y-P-I-N-G----------"</blockquote> --}}<p
                    class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Kemampuan mengetik adalah
                    dasar skill yang sangat diperlukan pada masa digitalisasi seperti sekarang, Apakah kecepatan mengetikmu
                    50WPM atau 100WMP..? atau lebih, tidak masalah! ikutlah kontes ini dan tunjukkan seberapa cepatnya
                    jari-jarimu.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="registration/typing">Daftar Sekarang</a><a
                        class="absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Download Pedoman Contest"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" class="bi bi-download stroke-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-typing bg-cover bg-center md:w-48 md:h-48 my-auto rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1 md:order-2">
                <h3 class="text-xl lg:text-2xl font-semibold">OLIMPIADE</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Teknologi Informasi dan Komputer Dasar"
                </blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Apakah kamu memiliki wawasan
                    luas akan komputer dan teknologi atau kamu ingin mengetahui seberapa luasnya wawasanmu, Kami dari
                    fanatik menyelenggarakan olimpiade berupa soal-soal seputar teknologi yang akan menantang pengetahuanmu
                    tentang komputer dan teknologi.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="order-2 mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="registration/olimpiade">Daftar Sekarang</a><a
                        class="order-1 absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Download Pedoman Contest"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-download stroke-2" viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-olimpiade md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1">
                <h3 class="text-xl lg:text-2xl font-semibold">PHOTOGRAPHY</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Sosial Masyarakat Dalam Penggunaan Media
                    Sosial"</blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Tunjukkanlah Karya-karya
                    yang memiliki makna dan filosofi yang dapat menginformasikan sesuatu mengenai sosial media pada
                    masyarakat, tunjukkan hasil jepretan terbaikmu. "Gambar memiliki informasi lebih luas dari sekedar
                    kata-kata".</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="registration/photography">Daftar Sekarang</a><a
                        class="absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Download Pedoman Contest"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" class="bi bi-download stroke-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-photo md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1 md:order-2">
                <h3 class="text-xl lg:text-2xl font-semibold">VIDEOGRAPHY</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Optimasi Teknologi Dalam Pendidikan
                    Negeri"</blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Videografi adalah media yang
                    mudah dicerna sebagai promosi, sosialisasi, menyampaian informasi, hiburan, apresiasi, dokumentasi dan
                    lainnya. Buatlah video mengenai pengunaan teknologi dan optimasinya pada pendidikan negeri. Tunjukkanlah
                    video terbaikmu!.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="order-2 mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="registration/videography">Daftar Sekarang</a><a
                        class="order-1 absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Download Pedoman Contest"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-download stroke-2" viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-video md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
        <div class="flex flex-col md:flex-row gap-8 border-2 rounded-sm p-4 md:p-8">
            <div class="flex-1">
                <h3 class="text-xl lg:text-2xl font-semibold">WEB DESAIN</h3>
                <blockquote class="mt-2 text-base md:text-md lg:text-lg italic">"Explore Indonesian Technology Culture"
                </blockquote>
                <p class="indent-12 mt-4 text-justify md:leading-relaxed text-sm md:text-base">Sebagai anak muda generasi-z
                    membuat website adalah kemampuan yang baik untuk dipelajari, mungkin hanya mengelola website pribadi
                    atau menjadikan web development sebagai pekerjaan. Hal ini tidak lepas dari UI pada website tersebut,
                    fanatik mengadakan lomba desain website, hanya desain dengan html, css dan js dengan membawa tema kultur
                    teknologi indonesia yang akan menilai kreatifitas dan inovasi kamu dalam UI/UX.</p>
                <div class="flex items-center justify-between relative"><a type="button"
                        class="mx-auto md:mx-0 text-sm inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-20 focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-6"
                        href="/registration/webdesign">Daftar Sekarang</a><a
                        class="absolute -bottom-10 -right-2 md:static mt-6 p-2" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="Download Pedoman Contest"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" class="bi bi-download stroke-2"
                            viewBox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg></a></div>
            </div>
            <div class="flex-initial bg-web md:w-48 md:h-48 my-auto bg-cover bg-center rounded-md shadow-md"></div>
        </div>
    </div><span class="w-full h-0" id="bazar"></span>
    <div class="mx-4 md:mx-8 lg:mx-10 p-5 md:p-8 lg:p-10 mt-16 rounded-md border-2 border-slate-600 glass-white">
        <h2 class="text-2xl lg:text-3xl font-semibold text-center">BAZAAR</h2>
        <h3 class="text-xs font-light text-center mt-2">Jl. Banda Aceh-Medan Km. 280,3, Buketrata, Mesjid Punteut, Blang
            Mangat, Kota Lhokseumawe.</h3>
        <p class="md:leading-relaxed indent-12 text-justify lg:px-32 mt-4 text-sm md:text-base">Bazar akan di lakukan
            selama 2 hari pada tanggal 17 - 18 Mei 2022, bazar akan di lakukan dengan mengundang setiap HMJ untuk ikut
            berpartisipasi membuat stand yang memperkenalkan masing masing jurusan di Politeknik Negeri Lhokseumawe.
            Selanjutnya akan di undang Mata Kuliah Kewirausahaan untuk turut membuat bazar, serta peserta bazar dari luar
            Politeknik Negeri Lhokseumawe untuk dapat mendaftar membuat stand.</p>
        <p class="text-sm text-center leading-relaxed mt-4 font-semibold">Daftar Info lengkap Mengikuti Bazaar dapat
            Menghubungi: 081234567890</p>
    </div>
    <div class="mb-20"></div>
@endsection
