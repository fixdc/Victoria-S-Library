@extends('dashboard.layouts.main')

@section('container')
    <div class="p-4 sm:ml-64 md:mt-20">
        <div class=" border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 bg-white/50 h-screen">
            <div class="md:flex md:justify-center my-auto ">
                <img src="../img/logo.png" alt="" class="w-80 md:96 md:mt-10">
            </div>
            <div class="flex justify-center my-auto">
                <h1 class="text-white text-2xl font-Mont font-bold md:text-7xl mt-5">Hello {{ auth()->user()->name }}</h1>
            </div>
            <div>
                <h5 class="text-white text-lg font-Mont font-bold m-2 md:mt-5 text-center">{{ auth()->user()->role->name }}</h5>
            </div>
        </div>
    </div>
@endsection