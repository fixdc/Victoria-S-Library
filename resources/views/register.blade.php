@extends('layouts.main')

@section('container')
    <div class="flex flex-col-reverse justify-center items-center h-screen">
        <form class="mx-auto w-80 font-Mont text-white" action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class=" font-bold block mb-2 text-sm text-white dark:text-white">Your Name</label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ old('name') }}">
                @error('name')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 font-Mont font-bold">
                <label for="email" class=" font-bold block mb-2 text-sm text-white dark:text-white">Your Class</label>
                <select id="countries"
                    class="font-bold bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="id_kelas">
                    <option selected>Select Class</option>
                    @foreach ($kelas as $kelas)
                        <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>    
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="username" class=" font-bold block mb-2 text-sm text-white dark:text-white">Your
                    Username</label>
                <input type="username" id="username" name="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Username" required value="{{ old('username') }}">
                @error('username')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="password" class="block mb-2 text-sm font-bold text-white dark:text-white">Your
                    password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <h5 class="mb-5 text-sm font-thin text-white">Already Registered? <a href="/login" class="text-blue-300 font-bold">Login
                    Here</a></h5>
            <button type="submit"
                class="block bg-blue-300 px-3 py-2 w w-full rounded-lg font-bold text-white hover:bg-blue-600">Register</button>
        </form>
    </div>
@endsection
