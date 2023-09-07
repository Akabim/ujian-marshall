<x-app-layout>

    @extends('templates.sidebar')
    
    @section('content')
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Silahkan Isi Form Penilaian') }}
        </h2>
        <hr class="w-96 bg-purple-600 mt-4">
        <form class="mt-7" method="POST" action="{{ route('guru.store') }}">
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
                <x-input-label for="nik" :value="__('NIK')" />
                <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')"  autofocus autocomplete="nik" />
                <x-input-error :messages="$errors->get('nik')" class="mt-2" />
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
                    {{-- <option value="siswa">Siswa</option> --}}
                    <option value="guru">Guru</option>
                </select>
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button
            </div>
        </form>
    </div>
    @endsection
    
    </x-app-layout>
    