async function fetchData() {
    const response = await fetch('/data');
    return await response.json();
}

function updateCharts(charts, data) {
    const now = data.time;

    charts.heartRate.data.labels.push(now);
    charts.heartRate.data.datasets[0].data.push(data.heart_rate);

    charts.breathingRate.data.labels.push(now);
    charts.breathingRate.data.datasets[0].data.push(data.breathing_rate);

    charts.spo2.data.labels.push(now);
    charts.spo2.data.datasets[0].data.push(data.spo2);

    charts.brainWaves.data.labels.push(now);
    charts.brainWaves.data.datasets[0].data.push(data.brain_waves);

    if (charts.heartRate.data.labels.length > 10) {
        charts.heartRate.data.labels.shift();
        charts.heartRate.data.datasets[0].data.shift();
        charts.breathingRate.data.labels.shift();
        charts.breathingRate.data.datasets[0].data.shift();
        charts.spo2.data.labels.shift();
        charts.spo2.data.datasets[0].data.shift();
        charts.brainWaves.data.labels.shift();
        charts.brainWaves.data.datasets[0].data.shift();
    }

    charts.heartRate.update();
    charts.breathingRate.update();
    charts.spo2.update();
    charts.brainWaves.update();
}

async function init() {
    const heartRateCtx = document.getElementById('heartRateChart').getContext('2d');
    const heartRateChart = new Chart(heartRateCtx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'Heart Rate (BPM)',
                data: [],
                borderColor: 'red',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    const breathingRateCtx = document.getElementById('breathingRateChart').getContext('2d');
    const breathingRateChart = new Chart(breathingRateCtx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'Breathing Rate (RPM)',
                data: [],
                borderColor: 'blue',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    const spo2Ctx = document.getElementById('spo2Chart').getContext('2d');
    const spo2Chart = new Chart(spo2Ctx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'Oxygen Saturation (SpO2 %)',
                data: [],
                borderColor: 'green',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    const brainWavesCtx = document.getElementById('brainWavesChart').getContext('2d');
    const brainWavesChart = new Chart(brainWavesCtx, {
        type: 'line',
        data: {
            labels: [],
            datasets: [{
                label: 'Brain Waves (µV)',
                data: [],
                borderColor: 'purple',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    const charts = {
        heartRate: heartRateChart,
        breathingRate: breathingRateChart,
        spo2: spo2Chart,
        brainWaves: brainWavesChart
    };

    setInterval(async () => {
        const data = await fetchData();
        updateCharts(charts, data);
    }, 1000);
}

init();