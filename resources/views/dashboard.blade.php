@extends("layouts.dashboard")

@section('pagetitle')
Dashboard
@endsection

@section("content")
<section class="section">
    <div class="section-header">
        <div class="mr-auto">
            <h1>Dashboard Page</h1>
        </div>
        <ul class="navbar-nav navbar-right">
            <li>
                <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Fetch New Data</a>
            </li>
        </ul>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-4 col-sm-6 col-lg-4">
                <div class="card card-body">
                    <canvas id="bubble" height=350></canvas>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-lg-4">
                <div class="card card-body">
                    <canvas id="bar" height=350></canvas>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-lg-4">
                <div class="card card-body">
                    <canvas id="doughnut" height=350></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Task Name</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Create a mobile app</td>
                                    <td>2018-01-20</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Redesign homepage</td>
                                    <td>2018-04-10</td>
                                    <td>
                                        <div class="badge badge-info">Todo</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Backup database</td>
                                    <td>2018-01-29</td>
                                    <td>
                                        <div class="badge badge-warning">In Progress</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Input data</td>
                                    <td>2018-01-16</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-12 col-lg-6">
                <div class="card card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Comments</th>
                                <th>Tags</th>
                                <th>Submit Date</th>
                            </tr>
                            @foreach ($review->data as $comment)
                            <tr>
                                <td>{{$comment->review}}</td>
                                <td>
                                    @if(sizeof($comment->tags) > 0)
                                    @foreach ($comment->tags as $tag )
                                    {{$tag}}
                                    @endforeach
                                    @else
                                    <span class="badge badge-danger">No Tags</span>
                                    @endif
                                </td>
                                <td>{{$comment->created_at->date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section("js")
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
            labels: ['[Aset,+]', '[Aset,-]', '[Pendidikan,+]', '[Pendidikan,+]', '[Layanan,+]', '[Layanan,-]'],
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
            data: [10, 20, 30],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
        }],
        labels: [
            'Aset',
            'Layanan',
            'Pendidikan'
        ],
    };

    var ctx3 = document.getElementById('doughnut').getContext('2d');
    var myDoughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: data,
        options: {}
    });
</script>
@endsection