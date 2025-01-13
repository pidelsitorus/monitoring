@extends('layouts.admin')

@section('title', 'Edit Pasien')

@section('contents')
    <h1 class="mb-0">Edit Pasien</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <form action="{{ route('devices/update', $device->id) }}" method="POST" class="flex flex-wrap gap-6 mt-10">
            @csrf
            @method('PUT')

            <div class="flex-1">
                <label for="nama" class="block text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $device->nama }}"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="status" class="block text-sm font-medium text-gray-900">Status</label>
                <input type="text" name="status" id="status" value="{{ $device->status }}"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="heart_rate_data" class="block text-sm font-medium text-gray-900">Heart Rate</label>
                <input id="heart_rate_data" name="heart_rate_data" type="text" value="{{ $device->heart_rate_data }}"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="spo2_data" class="block text-sm font-medium text-gray-900">SpO2</label>
                <input id="spo2_data" name="spo2_data" value="{{ $device->spo2_data }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="respiration_data" class="block text-sm font-medium text-gray-900">Respiration</label>
                <input id="respiration_data" name="respiration_data" value="{{ $device->respiration_data }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="delta" class="block text-sm font-medium text-gray-900">Delta</label>
                <input id="delta" name="delta" value="{{ $device->delta }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="theta" class="block text-sm font-medium text-gray-900">Theta</label>
                <input id="theta" name="theta" value="{{ $device->theta }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="alpha" class="block text-sm font-medium text-gray-900">Alpha</label>
                <input id="alpha" name="alpha" value="{{ $device->alpha }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="low_beta" class="block text-sm font-medium text-gray-900">Low Beta</label>
                <input id="low_beta" name="low_beta" value="{{ $device->low_beta }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="high_beta" class="block text-sm font-medium text-gray-900">High Beta</label>
                <input id="high_beta" name="high_beta" value="{{ $device->high_beta }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex-1">
                <label for="gamma" class="block text-sm font-medium text-gray-900">Gamma</label>
                <input id="gamma" name="gamma" value="{{ $device->gamma }}" type="text"
                    class="mt-2 block w-full rounded-md border-gray-300 py-1.5 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="w-full">
                <button type="submit"
                    class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:ring-2 focus-visible:ring-indigo-500">
                    Update
                </button>
            </div>
        </form>
    </div>
    <div class="mt-6">
        <a href="{{ route('devices') }}"
            class="inline-block px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">Kembali</a>
    </div>
@endsection
