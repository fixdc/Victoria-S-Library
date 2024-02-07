@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full">
        <div class="p-4 sm:ml-64 md:mt-20">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-screen">
                <div class="flex gap-4 mb-4">
                    <div class="p-5 flex items-center justify-center rounded bg-blue-400 dark:bg-gray-800 hover:bg-blue-800">
                        <a href="/dashboard/data-user">
                            <p class=" text-sm md:text-lg font-Mont font-bold text-white dark:text-gray-500">
                                CANCEL
                            </p>
                        </a>
                        
                    </div>
                </div>
                
                <form class="mx-auto max-w-5xl flex flex-col justify-start text-white" action="{{ route('user.update', ['slug' => $user->slug]) }}" method="POST" >
                    @csrf
                    @method('put')
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
                @if (session('error'))
                    {{  session('error')  }}
                @endif
                    <div class="mb-5 font-Mont font-bold">
                        <label for="email" class="block font-bold mb-2 text-sm text-white">Name</label>
                        <input type="text" id="name" name="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="{{ old('name', optional($user)->name) }}"
                            required>
                    </div>
                    <div class="mb-5 font-Mont font-bold">
                        <label for="username" class="block mb-2 text-sm font-bold text-white">username</label>
                        <input type="text" id="username" name="username"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ old('username', optional($user)->username) }}">
                    </div>
                    <div class="mb-3 font-Mont font-bold">
                        <label for="email" class="font-bold block mb-2 text-sm text-white dark:text-white">Kelas</label>
                        <select id="countries" name="id_kelas"
                            class="font-bold bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="id_kelas">
                            @foreach ($classes as $class)
                            @if ($class->id == $user->id_kelas)
                                <option selected value="{{ $user->id_kelas }}">{{ $user->kelas->name }}</option>
                            @else
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                            @endif    
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="mb-3 font-Mont font-bold">
                        <label for="email" class=" font-bold block mb-2 text-sm text-white dark:text-white">Role</label>
                        <select id="countries" name="role_id"
                            class="font-bold bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="role_id">
                            <option selected value="{{ $user->role_id }}">Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Petugas</option>
                            <option value="3">User</option>
                        </select>
                    </div>
                    <a href="/dashboard/edituser/editpassword/{{ $user->slug }}" class="text-white bg-blue-300 p-2 font-Mont font-medium w-fit mb-3 rounded-lg">
                        *Change Password Here
                    </a>
                    {{-- <div class="mb-5 font-Mont font-bold">
                        <label for="email" class="block mb-2 text-sm font-bold text-white">Password</label>
                        <input type="text" id="password" name="password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            >
                    </div> --}}
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit User</button>
                </form>

            </div>
        </div>
    </div>
@endsection
