<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanatik - 2022</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/manual_style.css') }}>
</head>

<body class="text-neutral-800 bg-pattern bg-repeat overflow-x-hidden">
    <div class="w-8 h-9 fixed right-2 bottom-2 z-30 gap-2 flex flex-col">
        <div class="dropup relative flex-1 bg-no-repeat bg-wa bg-center bg-contain w-100 h-100"><button
                class="w-full h-full" type="button" id="dropdownMenuButton1u" data-bs-toggle="dropdown"
                aria-expanded="false"></button>
            <ul class="dropdown-menu min-w-max absolute hidden bg-gray-800 text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none "
                aria-labelledby="dropdownMenuButton1u">
                <li> <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-200 hover:text-gray-800"
                        target="_blank" href="https://api.whatsapp.com/send?phone=6283899387508">CP-1 : Rafli Abdul
                        Aziz</a> </li>
                <li> <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-200 hover:text-gray-800"
                        target="_blank" href="https://api.whatsapp.com/send?phone=6282286587537">CP-2 : Nurul Azkiya
                        Ilyas</a> </li>
            </ul>
        </div>
    </div>
    <nav class="bg-[#212129]">
        <div class="container mx-auto flex h-[80px] items-center px-6">
            <div class="first hidden lg:flex flex-1 basis-3/12 gap-4">
                <div class="h-12 w-12 bg-logo_pnl bg-contain bg-center"></div>
                <div class="h-12 w-12 bg-logo_tik bg-contain bg-center"></div>
                <div class="h-12 w-12 bg-logo_himatik bg-contain bg-center"></div>
            </div>
            <div class="second flex-1 basis-6/12 flex justify-start lg:justify-center"> <span
                    class="text-[48px] text-white font-semibold flex items-center"> <a
                        class="flex-shrink-0 h-20 w-48 bg-logo bg-center bg-no-repeat bg-contain mr-2 lg:mr-6 opacity-90"
                        href="/"></a> </span> </div>
            <div class="block md:hidden z-20 text-white" id="hamburger_nav" style="position: relative;"> <svg
                    class="_navac fill-white w-6" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg> <svg class="fill-white w-6" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    <path fill="currentColor"
                        d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                    </path>
                </svg> </div>
            <ul class="third hidden flex-1 basis-3/12 md:flex justify-end gap-6">
                <li class="text-[18px] text-white"> <a class="select-none" href="/#seminar">Seminar</a> </li>
                <li class="text-[18px] text-white"> <a class="select-none" href="/#lomba">Contest</a> </li>
                <li class="text-[18px] text-white"> <a class="select-none" href="/#bazar">Bazar</a> </li>
                <li class="text-[18px] text-white my-auto"> <a class="select-none" href="/admin"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd"
                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg></a> </li>
            </ul>
        </div>
        <div class="m z-20 text-white absolute items-center justify-between flex-1 -translate-x-1/2 left-1/2 top-[5.075rem] bg-[#212129]w-full py-8 md:hidden w-full"
            style="background-color: #212129;" id="responsive_nav">
            <div>
                <ul class="text-center lg:flex lg:space-x-10 xl:space-x-12 text-lg space-y-4 lg:space-y-0 ">
                    <li><a class="active hover:text-green-400 transition" href="/#seminar">Seminar</a></li>
                    <li> <a class="hover:text-green-400 transition" href="/#lomba">Contest</a> </li>
                    <li><a class="hover:text-green-400 transition" href="/#bazar">Bazar</a></li>
                </ul>
            </div>
            <div class="first flex flex-initial gap-6 mt-8 justify-center">
                <div class="h-8 w-8 bg-logo_pnl bg-contain bg-center"></div>
                <div class="h-8 w-8 bg-logo_tik bg-contain bg-center"></div>
                <div class="h-8 w-8 bg-logo_himatik bg-contain bg-center"></div>
            </div>
        </div>
    </nav> @yield('content') <footer class="bg-[#212129]">
        <div class="text-sm md:text-base container px-10 py-5 text-white text-center">
            <h3>@ 2022 Copyright: Himpunan Mahasiswa TIK - Politeknik Negeri Lhokseumawe</h3>
        </div>
    </footer>
    <script src={{ asset('js/index.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    {{-- <script src={{ asset('js/node_modules_tw-elements_dist_js_index_min_js.js') }}></script> --}}
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script> @yield('script')
</body>

</html>
