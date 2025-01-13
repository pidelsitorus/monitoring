@extends('layouts.admin')

@section('title', 'Show Pasien')

@section('contents')
    <h1 class="font-bold text-2xl ml-3">Detail Pasien</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-900">Parameter
                        </th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-900">Value</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Nama</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->nama }}</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Status</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->status }}</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Heart Rate</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->heart_rate_data }}
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">SpO2</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->spo2_data }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Respiration</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->respiration_data }}
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Delta</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->delta }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Theta</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->theta }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Alpha</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->alpha }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Low Beta</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->low_beta }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">High Beta</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->high_beta }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">Gamma</td>
                        <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $device->gamma }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-6">
        <a href="{{ route('devices') }}"
            class="inline-block px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">Kembali</a>
    </div>
@endsection
