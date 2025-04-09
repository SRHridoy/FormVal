@extends('layouts.app')
@section('title','Create a New Product')

@section('content')
    <section class="max-w-7xl p-3">
        <h1 class="mb-6 text-4xl font-bold dark:text-white">Create a New Product</h1>

        {{-- Form --}}
        <form class="bg-slate-800 rounded-lg p-4">
            {{-- Product Name | Text Input --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
            {{-- Product Brand Name | Text Input --}}
            <div class="mb-5">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category<span class="text-red-500">*</span> </label>
                <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected value="">Choose a category</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="fashion">Fashion</option>
                    <option value="islamic">Islamic</option>
                    <option value="other">Other</option>
                  </select>
              </div>
            {{-- Product Price | Number Input --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
            {{-- Product Image | File Input --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
            {{-- Product Description | Textarea --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
            {{-- Product Stock | Number Input --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
            {{-- Feature This Product | Checkbox --}}
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name <span class="text-red-500">*</span> </label>
                <input type="text" name= "name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="e.g. Iphone 15 Pro Max" required />
              </div>
        </form>
    </section>
@endsection