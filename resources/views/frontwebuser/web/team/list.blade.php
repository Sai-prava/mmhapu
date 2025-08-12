@extends('frontwebuser.layout.index')

@section('title')
TEAM
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Team</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="btn btn-primary" href="{{route('frontwebuser.Team.add')}}">Add New Team</a>

            </div>
        </div>
    </div>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Photo</th>
                <th>Facebook ID</th>
                <th>Instagram ID</th>
                <th>X ID</th>
                <th>Short description</th>
                <th>Details </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($all_team as $team)

            <tr>
                <td>{{$i}}</td>
                <td>{{$team->name}}</td>
                <td>{{$team->designation}}</td>
                <td><img src="{{asset('Team/'.$team->photo)}}" alt="" width="100"></td>
                <td>{{$team->facebook}}</td>
                <td>{{$team->instagram}}</td>
                <td>{{$team->x}}</td>
                <td>{{$team->s_description}}</td>
                <td>{!!$team->details!!}</td>
                <td>
                    <a class="btn btn-icon btn-primary btn-sm" href="{{route('frontwebuser.Team.edit',$team->id)}}"><i class="far fa-edit"></i></a>
                </td>
                <td>
                    <a class="btn btn-icon btn-danger btn-sm" onclick="confirmDelete('{{route('frontwebuser.Team.delete',$team->id)}}')"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(deleteUrl) {
         var isConfirmed =confirm("Are you sure you want to delete this item?");
          if (isConfirmed) {
              window.location.href = deleteUrl;
          } else {

              alert("Deletion canceled");
          }
       }
  </script>
@endsection

