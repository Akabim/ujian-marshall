<x-app-layout>

@extends('templates.sidebar')

@section('content')
<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Silahkan Isi Form Penilaian') }}
    </h2>

    <hr class="w-96 bg-purple-600 mt-4">
    <form method="post" enctype="multipart/form-data" action="{{ route('ujian.store') }}" class="mt-6 space-y-6">
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
            <select id="countries" name="id_siswa" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Nama Siswa</option>
                @foreach ($siswa as $s )
                  <option value="{{ $s->id }}">{{$s->name}}</option>            
                @endforeach
                </select>        
            </div>

        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" name="id_level" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Level Penguji</option>
            @foreach ($level_penguji as $level )
              <option value="{{ $level->id }}">{{$level->level_penguji}}</option>            
            @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" name="id_pesawat" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Nama Pesawat</option>
            @foreach ($pesawat as $pes )
              <option value="{{ $pes->id }}">{{$pes->nama_pesawat}}</option>            
            @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" name="id_bandara" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Nama Bandara</option>
            @foreach ($bandara as $ban )
              <option value="{{ $ban->id }}">{{$ban->nama_bandara}}</option>            
            @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="countries" name="id_cuaca" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Kondisi Cuaca</option>
            @foreach ($cuaca as $c )
              <option value="{{ $c->id }}">{{$c->kondisi_cuaca}}</option>            
            @endforeach
            </select>
        </div>

        <h2 class="text-lg mt-3 font-medium text-gray-900">
            {{ __('List Pertanyaan 1') }}
        </h2>

        @foreach ($pertanyaan1 as $item)
        <div class="mb-7">
            <h3 class=" mb-3 text-md font-medium text-gray-900" for="pertanyaan{{ $item->id }}" >{{ $item->pertanyaan }}</h3>
            <div class="flex flex-wrap">            
                <div class="flex items-center mr-4">
                    <input checked id="default-radio-2" type="radio" value="1" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-1" type="radio" value="0" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                </div>
            </div>
        </div>
    @endforeach

    <h2 class="text-lg mt-3 font-medium text-gray-900">
        {{ __('List Pertanyaan 2') }}
    </h2>
        @foreach ($pertanyaan2 as $item)
        <div class="mb-7">
            <h3 class=" mb-3 text-md font-medium text-gray-900" for="pertanyaan{{ $item->id }}" >{{ $item->pertanyaan }}</h3>
            <div class="flex flex-wrap">            
                <div class="flex items-center mr-4">
                    <input checked id="default-radio-2" type="radio" value="1" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-1" type="radio" value="0" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                </div>
            </div>
        </div>
    @endforeach

    <h2 class="text-lg mt-3 font-medium text-gray-900">
        {{ __('List Pertanyaan 3') }}
    </h2>
        @foreach ($pertanyaan3 as $item)
        <div class="mb-7">
            <h3 class=" mb-3 text-md font-medium text-gray-900" for="pertanyaan{{ $item->id }}" >{{ $item->pertanyaan }}</h3>
            <div class="flex flex-wrap">            
                <div class="flex items-center mr-4">
                    <input checked id="default-radio-2" type="radio" value="1" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
                </div>
                <div class="flex items-center">
                    <input id="default-radio-1" type="radio" value="0" name="jawaban[{{ $item->id }}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
                </div>
            </div>
        </div>
    @endforeach

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

    </form>
</div>
@endsection

</x-app-layout>
