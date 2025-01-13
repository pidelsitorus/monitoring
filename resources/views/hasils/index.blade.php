@extends('layouts.admin')

@section('title', 'Hasil Pemeriksaan')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Hasil Pemeriksaan</h1>
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Pasien id</th>
                    <th scope="col" class="px-6 py-3">Total Apnea</th>
                    <th scope="col" class="px-6 py-3">Total Hypopnea</th>
                    <th scope="col" class="px-6 py-3">Durasi Tidur</th>
                    <th scope="col" class="px-6 py-3">AHI</th>
                </tr>
            </thead>
            <tbody>
                @if ($hasil->count() > 0)
                    @foreach ($hasil as $rs)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td>
                                {{ $rs->pasien_id }}
                            </td>
                            <td>
                                {{ $rs->total_apnea }}
                            </td>
                            <td>
                                {{ $rs->total_hypopnea }}
                            </td>
                            <td>
                                {{ $rs->durasi_tidur }}
                            </td>
                            <td>
                                {{ $rs->ahi }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Belum Ada Hasil</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
