<x-app-layout>
    @extends('templates.sidebar')
    @section('content')
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Data Siswa") }}
                </div>
                
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    NISN
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $siswa->name }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $siswa->nisn }}
                </th>
                <td class="px-6 py-4">
                    {{ $siswa->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $siswa->nilaiPersentase1 }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{route('ujian.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lakukan Pengujian</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
