@extends('admin.layout.index')

@section('title')
    Gateway
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Gateway</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{route('admin.gateway.create')}}">Add Gateway<i class="fas fa-plus-circle ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>College</th>
                        <th>Type</th>
                        <th>Merchant Name</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (App\Models\GatewayDetail::all() as $key=> $gateway)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ @$gateway->user->name }}</td>
                            <td>{{$gateway->type}}</td>
                            <td>{{$gateway->merchant_name}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.gateway.edit',$gateway->id)}}">Edit<i class="fas fa-edit ml-2"></i></a>
                            </td>
                            <td>
                                @if($gateway->user_id)
                                <form action="{{route('admin.gateway.destroy',$gateway->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete<i class="fas fa-trash-alt ml-2"></i></button>

                                </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
