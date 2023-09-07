<x-app-layout>

    @extends('templates.sidebar')
    
    @section('content')
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Silahkan Isi Form Penilaian') }}
        </h2>
        <hr class="w-96 bg-purple-600 mt-4">
        <form class="mt-7" method="POST" action="{{ route('siswa.store') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            {{-- <div class="mt-4">
                <x-input-label for="nik" :value="__('NIK *Kosongi jika siswa')" />
                <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')"  autofocus autocomplete="nik" />
                <x-input-error :messages="$errors->get('nik')" class="mt-2" />
            </div> --}}
            <div class="mt-4">
                <x-input-label for="nisn" :value="__('NISN')" />
                <x-text-input id="nisn" class="block mt-1 w-full" type="text" name="nisn" :value="old('nisn')"  autofocus autocomplete="nisn" />
                <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <!-- User Type -->
            <div class="mt-4 hidden">
                <x-input-label for="type" :value="__('User Type')" />
                <select id="type" name="type" class="block mt-1 w-full ">
                    <option value="siswa">Siswa</option>
                    {{-- <option value="guru">Guru</option> --}}
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

                {{-- <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button> --}}
            </div>
        </form>
        {{-- <form method="POST" enctype="multipart/form-data" action="{{ route('siswa.store') }}" class="mt-6 space-y-6">
            @csrf
            <div class="mb-6">
                <label for="name"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                <input type="text" id="name" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan NISN</label>
                <input type="text" id="nisn"  name="nisn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <label for="email"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Email</label>
                <input type="email" id="email"  name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
            </div>
            <div class="mb-6">
                <label for="password"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="text" id="password" name="password"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
             </div>
             <div class="mb-6 hidden">
                <label for="type" name="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <select disabled id="type" name="type" class="readonly bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="siswa">Siswa</option>            
                    </select>        
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>  
        </form> --}}
    </div>
    @endsection
    
    </x-app-layout>
    