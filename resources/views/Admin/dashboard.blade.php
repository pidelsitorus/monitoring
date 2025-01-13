@extends('layouts.admin')

@section('title', 'Admin Page')

@section('contents')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="{{ asset('css/monitoring.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div>
            <h1 class="font-bold text-2xl ml-3">Dashboard</h1>
        </div>
        <div class="container">

            <!-- Charts -->
            <div class="chart-container">
                <div class="chart-title">Heart Rate (BPM)</div>
                <canvas id="heartRateChart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-title">Breathing Rate (RPM)</div>
                <canvas id="breathingRateChart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-title">Oxygen Saturation (SpO2 %)</div>
                <canvas id="spo2Chart"></canvas>
            </div>
            <div class="chart-container">
                <div class="chart-title">Brain Waves (µV)</div>
                <canvas id="brainWavesChart"></canvas>
            </div>
        </div>
    </body>
    
    <script src="{{ asset('js/monitoring.js') }}"></script>

    </html>

@endsection
