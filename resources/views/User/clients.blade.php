<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Sleep Apnea Checker</title>
</head>

<body>
    {{-- Start Header --}}
    <div class="header identitas">
        <h2>Sleep Apnea Monitoring</h2>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </div> &nbsp;
    {{-- End Header --}}

    {{-- Start Container identitas dan Status Pemeriksaan --}}
    <div class="container">
        {{-- Start Identitas Pasien --}}
        <div class="identitas">
            <h2>Identitas Pasien</h2>
            @foreach ($pasien as $p)
                <div>
                    <h3>Nama: {{ $p->name }}</h3>
                    <h3>Umur: {{ $p->age }} Tahun</h3>
                    <h3>Jenis Kelamin: {{ $p->gender }}</h3>
                </div>
            @endforeach
        </div>
        {{-- End Identitas Pasien --}}

        {{-- Start Status Pemeriksaan --}}
        <div class="statusPeriksa">
            <h2>Status Pemeriksaan</h2>
            {{-- Start Status dan Timer --}}
            <div>
                <h3>Status Device: <span id="status-device">{{ $devices->status }}</span></h3>
                <h3>AHI: </h3>
            </div>
            {{-- End Status dan Timer --}}
        </div>
        {{-- End Status Pemeriksaan --}}
    </div>
    {{-- End Container identitas dan Status Pemeriksaan --}}

    {{-- Start Status Dari Sensor --}}
    <div class="statusSensor">
        <h2>Status Dari Sensor</h2>

        <div class="sensorGrid">
            {{-- Start Aktivitas Pernafasan Info --}}
            <div class="sensorInfo">
                <h3>Aktivitas Pernafasan</h3>
                <h4>RPM : <span id="respiration-data">{{ $devices->respiration_data }}</span></h4>
                <h4>Log Pernafasan: </h4>
            </div>
            {{-- End Aktivitas Pernafasan Info --}}

            {{-- Start Aktivitas Detak Jantung Info --}}
            <div class="sensorInfo">
                <h3>Aktivitas Detak Jantung</h3>
                <h4>BPM : <span id="heart-rate-data">{{ $devices->heart_rate_data }}</span></h4>
                <h4>Log Detak Jantung: </h4>
            </div>
            {{-- End Aktivitas Detak Jantung Info --}}

            {{-- Start Aktivitas Otak Info --}}
            <div class="sensorInfo">
                <h3>Aktivtas Otak</h3>
                <h4>Status: Delta/Theta/Aplha/Low Beta/High Beta/Gamma <b>(COMING SOON!!)</b></h4>
                <h4>Log Aktivitas Otak: </h4>
            </div>
            {{-- End Aktivitas Otak Info --}}

            {{-- Start Kadar Oksigen Dalam Darah Info --}}
            <div class="sensorInfo">
                <h3>Kadar Oksigen Dalam Darah</h3>
                <h4>Rata - Rata Kadar Oksigen : <span id="spo2-data">{{ $devices->spo2_data }}</span>%</h4>
                <h4>Log Kadar Oksigen Dalam Darah: </h4>
            </div>
            {{-- End Kadar Oksigen Dalam Darah Info --}}
        </div>
    </div>
    {{-- End Status Dari Sensor --}}

    {{-- Start Footer --}}
    <footer class="footer">
        <div class="footer-left">
            <h3>ApneaCare Solutions</h3>
            <p>Your Sleep Assistant for a Healthier Life</p>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} ApneaCare Solutions. All Rights Reserved.</p>
        </div>
    </footer>
    {{-- End Footer --}}

    {{-- Realtime Data Update Script --}}
    <script>
        function fetchRealtimeData() {
            $.ajax({
                url: "{{ route('pasien.dashboard') }}",
                method: "GET",
                success: function(response) {
                    $('#status-device').text(response.status);
                    $('#respiration-data').text(response.respiration_data);
                    $('#heart-rate-data').text(response.heart_rate_data);
                    $('#spo2-data').text(response.spo2_data);
                },
                error: function(error) {
                    console.error("Error fetching data:", error);
                }
            });
        }

        // Fetch data every 5 seconds
        setInterval(fetchRealtimeData, 5000);
    </script>

</body>

</html>
