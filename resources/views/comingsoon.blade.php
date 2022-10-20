@extends('Layouts.index')

@section('content')
    <div
        class="h-[calc(100vh-80px)] bg-cover bg-hero relative flex lg:align-center flex-col lg:flex-row gap-5 md:gap-8 p-8 md:p-12 lg:p-20 items-center justify-center">
        <!-- <img src="public/image/Hero_Nasa.jpg" class="absolute top-0 left-0 w-full object-cover h-full"> -->
        <div class="absolute top-0 left-0 glass h-full w-full"></div>
        <div class="contrainer mx-auto text-white z-10 flex-initial lg:basis-3/5">
            <h1 class="md:text-4xl text-3xl font-semibold tracking-wider">
                Festival Anniversary Of TIK 2022
            </h1>
            <blockquote class="md:text-2xl text-xl mt-4 italic">"Time for IGeneration to take digital responsibility"
            </blockquote>
            <section class="w-full mt-4">
                <h2 class="md:text-2xl text-xl font-semibold text-white mb-4">REGISTRATION OPENING SOON</h2>
                <div class="coming-soon flex space-x-10 text-center">
                    <div class="container-day">
                        <h3 class="font-semibold text-xl" id="pday">00</h3>
                        <h3>Hari</h3>
                    </div>
                    <div class="container-hour">
                        <h3 class="font-semibold text-xl" id="phour">00</h3>
                        <h3>Jam</h3>
                    </div>
                    <div class="container-minute">
                        <h3 class="font-semibold text-xl" id="pminute">00</h3>
                        <h3>Menit</h3>
                    </div>
                    <div class="container-second">
                        <h3 class="font-semibold text-xl" id="psecond">00</h3>
                        <h3>Detik</h3>
                    </div>
                </div>
            </section>
            <form action="/" method="GET">
                @csrf
                <button class="mt-5 border-2 bg-slate-400 p-2 text-black" type="submit">Force In</button>
            </form>
        </div>
        <div class="flex-initial lg:basis-2/5 bg-white/50 w-full">
            {{-- <div class="h-64 w-full bg-patter">

            </div> --}}
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var tooltipTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new Tooltip(tooltipTriggerEl);
        });
        setInterval(() => {
            countdown();
        }, 1000);
    </script>
@endsection
