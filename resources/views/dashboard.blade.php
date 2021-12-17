<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .uk-card {
            border-radius: 10px;
        }
    </style>
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section class="uk-section">
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <div class="uk-child-width-expand@s uk-text-center uk-margin-bottom" uk-grid>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <canvas id="bubble" height=300></canvas>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <canvas id="bar" height=300></canvas>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body">Item</div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-child-width-expand@s uk-text-center uk-margin-bottom" uk-grid>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">
                                        <canvas id="doughnut" height=500></canvas>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body">Item</div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body">Item</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var chart = new Chart(document.getElementById("bubble"), {
            type: 'bubble',
            data: {
                labels: "",
                datasets: [{
                    label: ["Aset"],
                    backgroundColor: "rgba(255,221,50,0.2)",
                    borderColor: "rgba(255,221,50,1)",
                    data: [{
                        x: 21269017,
                        y: 5.245,
                        r: 15
                    }]
                }, {
                    label: ["Pendidikan"],
                    backgroundColor: "rgba(60,186,159,0.2)",
                    borderColor: "rgba(60,186,159,1)",
                    data: [{
                        x: 258702,
                        y: 7.526,
                        r: 10
                    }]
                }, {
                    label: ["Pelayanan"],
                    backgroundColor: "rgba(0,0,0,0.2)",
                    borderColor: "#000",
                    data: [{
                        x: 3979083,
                        y: 6.994,
                        r: 15
                    }]
                }, {
                    label: ["Infrastruktur"],
                    backgroundColor: "rgba(193,46,12,0.2)",
                    borderColor: "rgba(193,46,12,1)",
                    data: [{
                        x: 4931877,
                        y: 5.921,
                        r: 15
                    }]
                }]
            },
            options: {
                legend: {
                    display: false,
                },
                title: {
                    display: false,
                    text: 'Topic Distribution'
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false,
                            labelString: "Happiness"
                        }
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: false,
                            labelString: "GDP (PPP)"
                        }
                    }]
                }
            }
        });


        var ctx2 = document.getElementById('bar').getContext('2d');
        var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });


        var data = {
            datasets: [{
                data: [10, 20, 30]
            }],
            labels: [
                'Red',
                'Yellow',
                'Blue'
            ]
        };

        var ctx3 = document.getElementById('doughnut').getContext('2d');
        var myDoughnutChart = new Chart(ctx3, {
            type: 'doughnut',
            data: data,
            options: {}
        });
    </script>
</body>