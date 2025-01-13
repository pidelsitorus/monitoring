@extends('layouts.admin')

@section('title', 'Data Pasien')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Data Pasien</h1>
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
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Heart Rate</th>
                    <th scope="col" class="px-6 py-3">SpO2</th>
                    <th scope="col" class="px-6 py-3">Respiration</th>
                    <th scope="col" class="px-6 py-3">Delta</th>
                    <th scope="col" class="px-6 py-3">Theta</th>
                    <th scope="col" class="px-6 py-3">Alpha</th>
                    <th scope="col" class="px-6 py-3">Low Beta</th>
                    <th scope="col" class="px-6 py-3">Gamma</th>
                </tr>
            </thead>
            <tbody>
                @if ($device->count() > 0)
                    @foreach ($device as $rs)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $rs->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->heart_rate_data }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->spo2_data }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->respiration_data }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->delta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->theta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->alpha }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->low_beta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->high_beta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rs->gamma }}
                            </td>
                            <td class="w-36">
                                <div class="h-14 pt-5">
                                    <a href="{{ route('devices/show', $rs->id) }}" class="text-blue-800">Detail</a> |
                                    <a href="{{ route('devices/edit', $rs->id) }}" class="text-green-800 pl-2">Edit</a> |
                                    <form action="{{ route('devices/destroy', $rs->id) }}" method="POST"
                                        onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">pasien not found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
