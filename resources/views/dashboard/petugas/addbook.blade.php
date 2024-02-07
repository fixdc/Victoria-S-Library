@extends('dashboard.layouts.main')
@section('container')
    <div class="h-auto p-4 ">
        <div class="sm:ml-64 md:mt-20">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-auto">
                <div class="flex gap-4 mb-4">
                    <div class="p-5 flex items-center justify-center rounded bg-blue-400 dark:bg-gray-800 hover:bg-blue-800">
                        <a href="/dashboard/data-buku">
                            <p class=" text-sm md:text-lg font-Mont font-bold text-white dark:text-gray-500">
                                CANCEL
                            </p>
                        </a>
                    </div>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
                <form class="mx-auto max-w-5xl flex flex-col justify-start text-white" action="/dashboard/data-buku/addbook"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <img id="imagePreview" src="{{ asset('img/logo.png') }}" alt="Preview" 
                    style="box-shadow: rgba(50, 50, 93, 0.115) 0px 6px 12px -2px, rgba(0, 0, 0, 0.061) 0px 3px 7px -3px; border-radius: 10px; display: ; border: 1px solid rgba(0, 0, 0, 0.161); max-width: 250px; min-width: 250px; width: 250px; max-height: 320px; min-height: 320px; height: 320px;">
                    <label class="block mb-2 text-sm font-Mont font-bold text-white" for="gambar">Upload
                        file</label>
                    <input accept="image/*"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="gambar" type="file" name="image">
                    <div class="mb-5 mt-5 font-Mont font-bold">
                        <label for="title" class="block font-bold mb-2 text-sm text-white">Title</label>
                        <input type="text" id="name" name="title"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required>
                    </div>
                    <div class="mb-5 font-Mont font-bold">
                        <label for="title" class="block font-bold mb-2 text-sm text-white">Stock</label>
                        <input type="number" id="name" name="stok"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required>
                    </div>

                    {{-- <div class="mb-5 font-Mont font-bold">
                        <label for="slug" class="block font-bold mb-2 text-sm text-white">Slug (Auto)</label>
                        <input type="text" id="name" name="slug"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required value="{{ old('slug') }}">
                    </div> --}}
                    <div class="mb-5 font-Mont font-bold">
                        <label for="body" class="block mb-2 text-sm font-bold text-white">Body</label>
                        <input type="text" id="email" name="body"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required>
                    </div>
                    <div class="mb-3 font-Mont font-bold">
                        <label for="category_id"
                            class=" font-bold block mb-2 text-sm text-white dark:text-white">Category</label>
                        <select id="countries" name="category_id"
                            class="font-bold bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                        Book</button>
                </form>

            </div>
        </div>
    </div>
    <script>
        // const title = document.querySelector('#title');
        // const slug = document.querySelector('#slug');

        // title.addEventListener('change', function() {
        //     fetch('/dashboard/books/checkSlug?title=' + title.value)
        //         .then(response => response.json())
        //         .then(data => slug.value = data.slug);
        // });

        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // });

        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('gambar');
            const imagePreview = document.getElementById('imagePreview');

            imageInput.addEventListener('change', function() {
                if (imageInput.files && imageInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    };

                    reader.readAsDataURL(imageInput.files[0]);
                }
            });
        });

    </script>
@endsection
