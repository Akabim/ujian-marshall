<x-app-layout>

    @extends('templates.sidebar')

    @section('content')
        <div class="container">
            <div class="relative overflow-x-auto">
                <h4 class="text-2xl font-bold dark:text-white">Detail Ujian</h4>
                <hr class="my-3 w-96">
                <p class="mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">Nama Peserta : <span
                        class="text-gray-900 dark:text-white font-bold ">{{ $siswa->name }}</span></p>
                @if (count($ujian) > 0)
                    <p class="mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">Nama Guru : <span
                            class="text-gray-900 dark:text-white font-bold ">{{ $ujian[0]->id_guru }}</span></p>
                    <p class="mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">Tipe Pesawat : <span
                            class="text-gray-900 dark:text-white font-bold ">{{ $ujian[0]->pesawat->tipe_pesawat }}</span>
                    </p>
                    <p class="mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">Kondisi Cuaca : <span
                            class="text-gray-900 dark:text-white font-bold ">{{ $ujian[0]->cuaca->kondisi_cuaca }}</span>
                    </p>
                    <p class="mt-2 text-sm font-normal text-gray-500 dark:text-gray-400">Tanggal Penilaian : <span
                            class="text-gray-900 dark:text-white font-bold ">{{ $ujian[0]->created_at }}</span></p>
                @endif

                {{-- Pertanyaan 1 --}}
                <h4 class="mt-7 mb-5 text-xl font-bold dark:text-white">Pertanyaan</h4>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pertanyaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $pertanyaan1_displayed = false; @endphp <!-- Inisialisasi variabel flag -->
                        @foreach ($ujian as $data)
                                <!-- Hanya tampilkan pertanyaan dengan id 1-20 -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                            {{ $data->pertanyaan->pertanyaan }}
                                    </td>
                                    <td class="px-6 text-center py-4">
                                        @if ($data->jawaban == 1)
                                            <span class="text-green-500">&#10003;</span>
                                            <!-- Tampilkan centang jika jawaban adalah 1 -->
                                        @else
                                            <span class="text-red-500">&#10007;</span>
                                            <!-- Tampilkan silang jika jawaban adalah 0 -->
                                        @endif

                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>


                {{-- <h4 class="mt-7 mb-5 text-xl font-bold dark:text-white">2. Pada saat menjalankan tugas</h4>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pertanyaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $data)
                            @if ($data->id_pertanyaan >= 9 && $data->id_pertanyaan <= 12)
                                <!-- Hanya tampilkan pertanyaan dengan id 1-20 -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->pertanyaan->pertanyaan }}
                                    </td>
                                    <td class="px-6 text-center py-4">
                                        @if ($data->jawaban == 1)
                                            <span class="text-green-500">&#10003;</span>
                                            <!-- Tampilkan centang jika jawaban adalah 1 -->
                                        @else
                                            <span class="text-red-500">&#10007;</span>
                                            <!-- Tampilkan silang jika jawaban adalah 0 -->
                                        @endif

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>


                <h4 class="mt-7 mb-3 text-xl font-bold dark:text-white">3. Memandu Parkir Pesawat Udara</h4>
                <h6 class="mt-3 mb-5 ml-3 text-md font-bold dark:text-white">A. Hand Signal Marshalling (Fixed Wing)</h6>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pertanyaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $data)
                            @if ($data->id_pertanyaan >= 13 && $data->id_pertanyaan <= 26)
                                <!-- Hanya tampilkan pertanyaan dengan id 1-20 -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->pertanyaan->pertanyaan }}
                                    </td>
                                    <td class="px-6 text-center py-4">
                                        @if ($data->jawaban == 1)
                                            <span class="text-green-500">&#10003;</span>
                                            <!-- Tampilkan centang jika jawaban adalah 1 -->
                                        @else
                                            <span class="text-red-500">&#10007;</span>
                                            <!-- Tampilkan silang jika jawaban adalah 0 -->
                                        @endif

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>



                <h6 class="mt-7 ml-3 mb-5 text-md font-bold dark:text-white">B. Hand Signal Marshalling (Rotary Wing)</h6>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pertanyaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $data)
                            @if ($data->id_pertanyaan >= 27 && $data->id_pertanyaan <= 37)
                                <!-- Hanya tampilkan pertanyaan dengan id 1-20 -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->pertanyaan->pertanyaan }}
                                    </td>
                                    <td class="px-6 text-center py-4">
                                        @if ($data->jawaban == 1)
                                            <span class="text-green-500">&#10003;</span>
                                            <!-- Tampilkan centang jika jawaban adalah 1 -->
                                        @else
                                            <span class="text-red-500">&#10007;</span>
                                            <!-- Tampilkan silang jika jawaban adalah 0 -->
                                        @endif

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>


                <h4 class="mt-7 mb-3 text-xl font-bold dark:text-white">4. Pada saat setelah selesai pemanduan parkir
                    pesawat udara</h4>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pertanyaan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jawaban
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ujian as $data)
                            @if ($data->id_pertanyaan >= 38 && $data->id_pertanyaan <= 39)
                                <!-- Hanya tampilkan pertanyaan dengan id 1-20 -->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->pertanyaan->pertanyaan }}
                                    </td>
                                    <td class="px-6 text-center py-4">
                                        @if ($data->jawaban == 1)
                                            <span class="text-green-500">&#10003;</span>
                                            <!-- Tampilkan centang jika jawaban adalah 1 -->
                                        @else
                                            <span class="text-red-500">&#10007;</span>
                                            <!-- Tampilkan silang jika jawaban adalah 0 -->
                                        @endif

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    @endsection

</x-app-layout>
