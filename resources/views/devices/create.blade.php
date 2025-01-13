@extends('layouts.admin')

@section('title', 'Create Pasien')

@section('contents')
    <h1 class="font-bold text-2xl ml-3">Add Pasien</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <form action="{{ route('devices/store') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-wrap gap-6 mt-10">
            @csrf
            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                <div class="mt-2">
                    <input type="text" name="nama" id="nama"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                <div class="mt-2">
                    <input type="text" name="status" id="status"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Heart Rate</label>
                <div class="mt-2">
                    <input id="heart_rate_data" name="heart_rate_data" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">SpO2</label>
                <div class="mt-2">
                    <input id="spo2_data" name="spo2_data" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Respiration</label>
                <div class="mt-2">
                    <input id="respiration_data" name="respiration_data" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Delta</label>
                <div class="mt-2">
                    <input id="delta" name="delta" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Theta</label>
                <div class="mt-2">
                    <input id="theta" name="theta" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Alpha</label>
                <div class="mt-2">
                    <input id="alpha" name="alpha" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Low Beta</label>
                <div class="mt-2">
                    <input id="low_beta" name="low_beta" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">High Beta</label>
                <div class="mt-2">
                    <input id="high_beta" name="high_beta" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Gamma</label>
                <div class="mt-2">
                    <input id="gamma" name="gamma" type="text"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="w-full">
                <button type="submit"
                    class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:ring-2 focus-visible:ring-indigo-500 mt-10">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
