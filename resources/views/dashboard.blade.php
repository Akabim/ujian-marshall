<x-app-layout>
    @extends('templates.sidebar')
    @section('content')
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Data Admin") }}
                </div>
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
                            Nilai Jenis 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Jenis 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Jenis 3
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Jenis 4
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai Jenis 5
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Nilai
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
                        {{$siswa->nilai_akhir1}}
                    </td>
                    <td class="px-6 py-4">
                        {{$siswa->nilai_akhir2}}
                    </td>
                    <td class="px-6 py-4">
                        {{$siswa->nilai_akhir3}}
                    </td>
                    <td class="px-6 py-4">
                        {{$siswa->nilai_akhir4}}
                    </td>
                    <td class="px-6 py-4">
                        {{$siswa->nilai_akhir5}}
                    </td>
                    <td class="px-6 py-4">
                        {{$siswa->total_nilai}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('ujian.detailUjian', $siswa->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>      
        </div>

    </div>
    @endsection
</x-app-layout>
