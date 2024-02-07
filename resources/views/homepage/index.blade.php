@extends('layouts.main')

@section('container')
    <div class="flex rounded-md justify-start mx-4 md:mx-56 h-auto pt-24 ">
        <a href="/" class=" bg-blue-400 p-3 rounded-md font-Mont text-xs mt-2 mb-3 font-bold text-white"><i
                class="fa-solid fa-arrow-left"></i> Back to
            Home</a>
    </div>
    {{-- <div class="flex flex-col justify-center mx-auto items-center md:flex-row gap-4 md:mx-64">
    @foreach ($books as $book)
        <div class="max-w-[350px] bg-white rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                <img class="max-h-[430px] rounded-t-lg" src="{{ asset('storage/' . $book->image) }}" alt="" />      
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white" style="
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
</div> --}}
    <div class="mb-4">
        <form action="{{ route('books.search') }}" method="GET">
            @csrf
            <div class="flex mx-4 md:mx-56">
                <div class="relative w-full">
                    <input type="search" name="title" id="search-dropdown"
                        class=" rounded-lg block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search Books..." required>
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class=" mx-4 md:mx-56 mb-3">
        <div class="flex flex-row justify-between">
            <button id="buttonCategories" data-dropdown-toggle="categories" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Categories  <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <form action="">
                    @csrf
                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset
                    </button>
                </form>
        </div>

            <!-- Dropdown menu -->
<form id="categories" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" action="{{ route('books.index') }}" method="GET">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="buttonCategories">
      @foreach ($categories as $item)
      <li>
        <button type="submit" name="category" value="{{ $item->id }}" class="w-full text-left block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{  $item->category_name  }}</a>
      </li>
      @endforeach
    </ul>
</form>
        <div class="mx-4 md:mx-0 flex flex-wrap md:space-y-0 space-y-5 md:gap-5 md:flex-row items-center justify-center bg-white/10 rounded-lg p-4 mt-3">
            @foreach ($books as $book)
                <div
                    class="max-w-[200px] min-w-[200px] bg-white rounded-lg shadow-2xl dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                    <img class="max-h-[270px] min-h-[270px] rounded-t-lg" src="{{ asset('storage/' . $book->image) }}" alt="" />
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-0 text-md font-bold tracking-tight text-gray-900 dark:text-white"
                                style="
                                    overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 1;
                                            line-clamp: 2; 
                                    -webkit-box-orient: vertical;
                                    ">
                                {{ $book->title }}</h5>
                        </a>
                        <p class="mb-1 font-normal text-sm font-Mont text-gray-700 dark:text-gray-400"
                            style="
                                overflow: hidden;
                                display: -webkit-box;
                                -webkit-line-clamp: 1;
                                        line-clamp: 2; 
                                -webkit-box-orient: vertical;
                                ">
                            {{ $book->category->category_name }}</p>
                        <p class="mb-2 font-normal font-Pops text-sm text-gray-700 dark:text-gray-400"
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    {{ $books->links("homepage.pagination") }}
        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 mt-5">
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
