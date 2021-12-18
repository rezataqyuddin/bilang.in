@extends("layouts.dashboard")

@section("content")
<section class="section">
    <div class="section-header">
        <h1>API Documentation Page</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card card-body">
                    @include('response')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection