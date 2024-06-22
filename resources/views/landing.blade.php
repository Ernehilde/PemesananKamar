<x-app-layout>
    <x-slot name="mainLogoRoute">
    </x-slot>


    <div class="relative">
        <section class="relative bg-cover bg-center bg-no-repeat "
            style="background-image: url({{ asset('images/banner/banner.png') }}" ;>
            <div
                class="absolute inset-0 bg-gradient-to-r from-white/95 to-white/0 ltr:bg-gradient-to-r rtl:bg-gradient-to-l sm:bg-transparent sm:from-white/95 sm:to-white/0">
            </div>

            <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
                <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                    <h1 class="text-3xl font-extrabold sm:text-5xl text-neutral-700">
                        Cari Kamar Impian untuk Liburan di
                        <strong class="block font-extrabold text-blue-500">
                            Flower Booking </strong>
                    </h1>

                    <p class="mt-4 max-w-lg sm:text-xl/relaxed">
                        Temukan pengalaman menginap yang tak terlupakan di kamar hotel kami, di mana setiap momen
                        dirancang untuk memenuhi impian dan keinginan Anda.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4 text-center">
                        <a href="#"
                            class="block w-full rounded bg-blue-500 px-12 py-3 text-lg font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                            Book Now </a>
                        <a href="#"
                            class="block w-full rounded bg-white px-12 py-3 text-lg font-medium text-blue-500 shadow hover:text-blue-600 focus:outline-none focus:ring-offset-blue-400 active:text-blue-500 sm:w-auto">
                            Browse Rooms
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <div>
            <div class="text-center text-4xl font-semibold text-blue-500 m-2 mt-5">Categories</div>

            <div class="container flex gap-10 p-10 pt-3 justify-center mx-auto">
                <a href="#" class="text-center gap-2 duration-300 hover:scale-105">
                    <img class="w-60 rounded-xl c-gambar" src="{{ asset('images/pantai.jpg') }}" alt="">
                    <span class="text-blue-500 text-2xl">Pantai</span>
                </a>
                <a href="#" class="text-center gap-2 duration-300 hover:scale-105">
                    <img class="w-60 rounded-xl c-gambar" src="{{ asset('images/desa.jpg') }}" alt="">
                    <span class="text-blue-500 text-2xl">Pedesaan</span>

                </a>
                <a href="#" class="text-center gap-2 duration-300 hover:scale-105">
                    <img class="w-60 rounded-xl c-gambar" src="{{ asset('images/gunung.webp') }}" alt="">
                    <span class="text-blue-500 text-2xl">Pegunungan</span>

                </a>
                <a href="#" class="text-center gap-2 duration-300 hover:scale-105">
                    <img class="w-60 rounded-xl c-gambar" src="{{ asset('images/kota.jpg') }}" alt="">
                    <span class="text-blue-500 text-2xl">Perkotaan</span>
                </a>
            </div>

        </div>

        <section class="bg-white pt-5">
            <div class="md:w-3/4 mx-auto">
                <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
                    <h3 class="mb-6 text-3xl text-blue-500 font-bold">Kelompok 3</h3>
                    <p class="mb-6 pb-2 text-gray-700 md:mb-12 md:pb-0">
                        Ini adalah Anggota-anggota dari Kelompok 3
                    </p>
                </div>

                <div class="grid gap-6 text-center p-6 md:grid-cols-3 lg:gap-12">
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="{{asset('images/herman.jpg')}}"
                                class="w-32 rounded-full shadow-lg">
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Ahmad Suherman</h5>
                        <h6 class="mb-4 font-semibold text-primary">
                            -
                        </h6>
                    </div>
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="{{asset('images/avina.jpg')}}"
                                class="w-32 rounded-full shadow-lg">
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Avina Gabriela</h5>
                        <h6 class="mb-4 font-semibold text-primary">
                            -
                        </h6>
                    </div>
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="{{asset('images/gura.png')}}"
                                class="w-32 rounded-full shadow-lg">
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Candra Purnama</h5>
                        <h6 class="mb-4 font-semibold text-primary">
                            211011402049
                        </h6>
                    </div>
                    <div class="mb-12 md:mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="{{asset('images/ado.jpg')}}"
                                class="w-32 rounded-full shadow-lg">
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Nurmansyah</h5>
                        <h6 class="mb-4 font-semibold text-primary">
                            -
                        </h6>
                    </div>
                    <div class="mb-0">
                        <div class="mb-6 flex justify-center">
                            <img src="{{asset('images/sofwan.jpg')}}"
                                class="w-32 rounded-full shadow-lg">
                        </div>
                        <h5 class="mb-4 text-xl font-semibold">Sofwan</h5>
                        <h6 class="mb-4 font-semibold text-primary">
                            -
                        </h6>
                    </div>
                </div>


        </section>
        <footer class="bg-blue-500 text-center text-neutral-100 lg:text-left">

            <div class="mx-6 py-10 text-center md:text-left">
                <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div>
                        <h6 class="mb-4 flex items-center justify-center font-semibold text-xl md:justify-start">
                            <img class="w-10 h-10" src="{{ asset('images/logo.webp') }}" alt="">
                            Flower Booking
                        </h6>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>
                            No. 23/3,
                            Jl. Gunung Balong II,
                            Lebak Bulus
                        </p>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path
                                    d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path
                                    d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                            flowerbooking@test.com
                        </p>
                        <p class="mb-4 flex items-center justify-center md:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="mr-3 h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            0896-2000-6510
                        </p>

                    </div>
                </div>
            </div>

            <div class="bg-white p-2 text-center">
                <span class="text-neutral-500">© 2024 Copyright:</span>
                <a class="font-semibold text-neutral-600" href="/">Flower Booking</a>
            </div>
        </footer>
</x-app-layout>
