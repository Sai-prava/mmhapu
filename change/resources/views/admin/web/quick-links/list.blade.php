@extends('admin.layout.index')

@section('title')
QUICK LINK
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Quick Link</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="btn btn-primary" href="{{route('admin.Quicklink.add')}}">Add Quick Link</a>

            </div>
        </div>
    </div>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Url</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($quicklinks as $quicklink)

            <tr>
                <td>{{$i}}</td>
                <td>{{$quicklink->title}}</td>
                <td>{{$quicklink->url}}</td>
                <td>
                    <a class="btn btn-icon btn-primary" href="{{route('admin.Quicklink.edit',$quicklink->id)}}"><i class="far fa-edit"></i> Edit</a>
                </td>
                <td>
                    <a class="btn btn-icon btn-danger" onclick="confirmDelete('{{route('admin.Quicklink.delete',$quicklink->id)}}')"><i class="fas fa-trash-alt"></i> Delete</a>
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

