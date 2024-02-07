@extends('layouts.main')
@section('container')
    <div class="flex flex-col-reverse justify-center items-center pt-20 mx-4 md:mx-24 md:flex-row md:h-screen scroll-smooth "
        id="home">
        @if (session()->has('success'))
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    Register Success
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif
        <div class=" md:w-[700px]">
            <h1 class="text-2xl md:text-8xl text-white font-bold font-Mont mb-5 delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0"
                data-taos-offset="300">Victoria'S Library.Co</h1>
            <p class="text-white font-Mont font-thin w-fit delay-[300ms] duration-[600ms] taos:translate-y-[200px] taos:opacity-0"
                data-taos-offset="300">"We Adapt, We improvise, We Overcome". <br>Welcome to our offline library system that
                integrated by friendly user experience</p>
        </div>
        <img src="./img/logo.png"
            class="w-96 bg-blue-200/5 m-5 p-5 rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"
            alt="">
    </div>
    {{-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownn"
        class=" mx-4 my-4 z-50 md:mx-10 md:my-10 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 fixed right-5 bottom-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">Contact<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownn" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 fixed">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 fixed" aria-labelledby="dropdownDefaultButton">
            <li>
                <p href="#" class=" px-4 py-2 justify-center items-center flex">CONTACT</p>
            </li>
            <li>
                <a href="https://www.instagram.com/_fixdc/"
                    class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex flex-row justify-start items-start "><svg
                        class="flex flex-row justify-start items-start pr-1"http://www.w3.org/2000/svg" height="16"
                        width="14"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>Instagram</a>
            </li>
            <li>
                <a href="mailto:aidhil522@gmail.com"
                    class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex flex-row justify-start items-start"><svg
                        class="flex flex-row justify-start items-start pr-1" xmlns="http://www.w3.org/2000/svg"
                        height="16" width="16"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                    </svg>Gmail</a>
            </li>
            <li>
                <a href="https://wa.me/+6281319449299"
                    class=" px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex flex-row justify-start items-start"><svg
                        class="flex flex-row justify-start items-start pr-1" xmlns="http://www.w3.org/2000/svg"
                        height="16" width="14"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>Whatsapp</a>
            </li>
        </ul>
    </div> --}}
    {{-- <section class="flex items-center pt-20  xl:h-screen font-poppins dark:bg-gray-800 " id="about">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-6 md:px-6">
            <div class="relative max-w-xl mx-auto">
                <img src="./img/perpus.jpg" alt="" class="relative z-20 object-cover w-full rounded-2xl h-96">
                <div class="absolute top-0 left-0 items-center justify-center hidden -ml-16 -mt-14 lg:inline-flex">
                    <svg width="169" height="136" viewBox="0 0 169 136" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="49" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="49" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="121" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="73" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="145" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="29" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="50" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="71" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="92" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="25" cy="113" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="28" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="49" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="70" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="91" r="5" fill="#99BAFB" fill-opacity="0.32" />
                        <circle cx="97" cy="112" r="5" fill="#99BAFB" fill-opacity="0.32" />
                    </svg>
                </div>
                <div class="bottom-0 z-40 mt-10 -mb-20 lg:absolute lg:right-0 lg:-mr-44 lg:mt-0 shadow-xl">
                    <div
                        class="w-full p-8 border dark:border-gray-700 bg-gray-50 dark:bg-gray-700 lg:w-96 rounded-2xl shadow-xl hover:shadow-blue-400 transition ease-in-out hover:-translate-y-1 hover:scale-110 delay-150 duration-300 ">
                        <h2 class="mb-4 text-4xl font-bold text-gray-600 dark:text-gray-300 delay-[300ms] duration-[600ms] taos:translate-y-[200px] "
                            data-taos-offset="300">About Us</h2>
                        <span class="pb-4 mb-4 text-black delay-[300ms] duration-[600ms] taos:translate-y-[200px] typed "
                            data-taos-offset="300">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="bg-blue-950/35 px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 rounded-lg mt-10">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">About Us</h2>
                <p class="mb-4 text-white">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p class="text-white">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg grayscale shadow-lg" src="./img/bg.jpg" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg shadow-lg" src="./img/bg.jpg" alt="office content 2">
            </div>
        </div>
    </section>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 text-white mt-10 bg-blue-950/3 rounded-lg bg-blue-950/35">
        <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
            <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-white" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2"
                                        x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-Pops font-bold">Step 1</p>
                        <p class="text-white ">
                            Login / Register
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-white" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2"
                                        x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-Pops font-bold">Step 2</p>
                        <p class="text-white">
                            Pinjamlah buku sesuai keinginan
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-white" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2"
                                        x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-Pops font-bold">Step 3</p>
                        <p class="text-white">
                            Patuhi peraturan peminjaman yang ada
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-4 text-white" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <line fill="none" stroke-miterlimit="10" x1="12" y1="2"
                                        x2="12" y2="22"></line>
                                    <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-lg font-Pops font-bold">Step 4</p>
                        <p class="text-white">
                            Kembalikan buku setelah selesai di pakai
                        </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                <svg class="w-6 text-white" stroke="currentColor" viewBox="0 0 24 24">
                                    <polyline fill="none" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8">
                                    </polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="mb-2 text-lg font-Pops font-bold">Success</p>
                        <p class="text-gray-700"></p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img class="inset-0 object-cover object-bottom w-ful h-96 lg:absolute lg:h-full"
                    src="./img/word.png" alt="" />
            </div>
        </div>
    </div>

  
    <!-- ====== FAQ Section Start -->
    <div class="bg-blue-950/35 px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 rounded-lg my-10">
      <section class="py-10 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135"
                                height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24">
                        </rect>
                    </svg>
                    <span class="relative text-white font-Mont font-bold ">FREQUENTLY ASKED QUESTIONS</span>
                </span>
            </h2>
            <p class="text-base text-white md:text-lg font-Pops ">
                FAQ adalah kumpulan pertanyaan dan jawaban yang sering ditanyakan oleh pengguna atau pelanggan mengenai
                suatu produk, layanan, atau topik tertentu.
            </p>
        </div>
            <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                <div
                    class="rounded-lg transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6 ">
                        <span class="flex text-lg font-semibold text-black">Apa itu Web Perpustakaan?</span>
                        <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6 delay-150 ease-in-out duration-150">
                        <p>Web Perpustakaan adalah platform online yang memberikan akses ke koleksi sumber daya informasi, seperti buku, jurnal, artikel, dan materi lainnya. Ini memungkinkan pengguna untuk mencari, mengakses, dan menggunakan sumber daya perpustakaan secara elektronik.</p>
                    </div>
                </div>
                <div
                    class="rounded-lg transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">Bagaimana cara saya mengakses Web Perpustakaan?</span>
                        <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Untuk mengakses Web Perpustakaan, cukup kunjungi situs web perpustakaan dan masuk menggunakan akun perpustakaan Anda. Jika Anda belum memiliki akun, biasanya Anda dapat mendaftar secara online atau di perpustakaan fisik.</p>
                    </div>
                </div>
                <div
                    class="rounded-lg transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">Apakah Web Perpustakaan dapat diakses dari mana saja?</span>
                        <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Ya, Web Perpustakaan umumnya dapat diakses dari mana saja dengan koneksi internet. Ini memungkinkan pengguna untuk mengakses sumber daya perpustakaan tanpa harus berada di lokasi fisik perpustakaan.</p>
                    </div>
                </div>
                <div
                    class="rounded-lg transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                        <span class="flex text-lg font-semibold text-black">Bagaimana cara mendapatkan bantuan jika saya mengalami masalah</span>
                        <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                        <p>Perpustakaan biasanya menyediakan layanan bantuan teknis. Anda dapat menghubungi staf perpustakaan melalui email, telepon, atau live chat untuk mendapatkan bantuan jika mengalami masalah teknis atau kesulitan dalam menggunakan layanan Web Perpustakaan.</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // JavaScript to toggle the answers and rotate the arrows
            document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
                button.addEventListener('click', function() {
                    var answer = document.getElementById('answer' + (index + 1));
                    var arrow = document.getElementById('arrow' + (index + 1));
    
                    if (answer.style.display === 'none' || answer.style.display === '') {
                        answer.style.display = 'block';
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        answer.style.display = 'none';
                        arrow.style.transform = 'rotate(-180deg)';
                    }
                });
            });
        </script>
    </section>
    </div>
    <!-- ====== FAQ Section End -->

    <section class="flex items-center font-poppins dark:bg-gray-900">
        <div class="justify-center flex-1 max-w-3xl px-4 py-4 mx-auto text-left lg:py-1 ">
            <div class="mb-10 text-center">
                <span
                    class="block mt-5 mb-3 text-xs font-semibold leading-4 tracking-widest text-center text-white uppercase dark:text-gray-400"
                    id="book">
                    OUR BOOKS
                </span>
                <h1 class="text-3xl font-bold font-Mont text-white w-full  rounded-md p-3">LATEST BOOKS</h1>
            </div>
        </div>
    </section>
    <div class="flex flex-col justify-center items-center md:flex-row gap-4 md:mx-64">
        @foreach ($books as $book)
            <div
                class="max-w-[250px] md:max-w-[350px] md:min-w-[350px] bg-white rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                <img class="max-h-[330px] md:max-h-[430px] md:min-h-[430px] rounded-t-lg"
                    src="{{ asset('storage/' . $book->image) }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="
                        overflow: hidden;
                        display: -webkit-box;
                        -webkit-line-clamp: 1;
                                line-clamp: 2; 
                        -webkit-box-orient: vertical;
                        ">
                            {{ $book->title }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"
                        style="
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
                    line-clamp: 2; 
            -webkit-box-orient: vertical;
            ">
                        {{ $book->body }}</p>
                    <a href="/singlebook/{{ $book->slug }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>


    {{-- <div class=" mx-5 md:mx-64 flex flex-col gap-y-10 md:flex-row items-center justify-center gap-4 mb-3">
        @foreach ($books as $book)
            <a href="{{ url('singlebook/' . $book->slug) }}">
                <div class="max-w-sm shadow-xl rounded-lg dark:bg-gray-800 dark:border-gray-700 ">
                    <img class="rounded-t-lg object-cover min-w-96 max-h-96"
                        src="{{ asset('storage/' . $book->image) }}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                            style="
                            overflow: hidden;
                            display: -webkit-box;
                            -webkit-line-clamp: 1;
                                    line-clamp: 2; 
                            -webkit-box-orient: vertical;
                            ">
                            {{ $book->title }}</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div> --}}
    <div class="flex rounded-md h-auto justify-center md:justify-end mx-auto items-center md:mx-64 mt-3">
        <a href="/books"
            class=" text-white font-bold text-center bg-blue-400 p-3 rounded-md font-Mont text-xs mb-11 hover:bg-blue-800 hover:animate-pulse hover:translate-x-4 delay-100 ease-in-out transition">READ MORE <i
            class="fa-solid fa-arrow-right pl-2"></i></a>
    </div>
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex items-start flex-col">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <span
                        class="self-center text-2xl whitespace-nowrap dark:text-white font-Mont font-bold">VICTORIA'S</span>
                </a>
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <span
                        class="self-center text-sm whitespace-nowrap font-pops font-bold text-black/50">by.fikrifix</span>
                </a>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">Victoria's</a>. All Rights Reserved.</span>
        </div>
    </footer>
    
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
