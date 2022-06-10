@extends("layouts.dashboard")

@section('pagetitle')
API Docs
@endsection

@section("content")
<section class="section">

    <div class="section-header">
        <div class="mr-auto">
            <h1>API Page</h1>
        </div>
        <ul class="navbar-nav navbar-right">
            <li>
                <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add New API</a>
            </li>
        </ul>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card card-body">
                    <code>
                        GET https://sidana.usu.ac.id/api/reviews<br>
                        Response :</br>
                        {
                        "data": [
                        {
                        "uuid": "c7611b0210dc4bcdbf54e085a1c585c4",
                        "review": "Saya senang kuliah di USU",
                        "tags": [],
                        "created_at": {
                        "date": "2021-11-11 07:03:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                        },
                        "updated_at": {
                        "date": "2021-11-11 07:03:18.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                        }
                        },
                        ]}
                    </code>
                    <br>
                    @include('response')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection