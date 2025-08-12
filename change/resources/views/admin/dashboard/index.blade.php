@extends('admin.layout.index')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="media mb-0">
                    <div class="media-body">
                        <h3 class="font-weight-semibold mb-0 text-center">
                            MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="media mb-0">
                    <div class="media-body" style="text-align: center">
                        <img src="{{ asset('uploads/logo/logo1.png') }}" alt="" width="250">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
