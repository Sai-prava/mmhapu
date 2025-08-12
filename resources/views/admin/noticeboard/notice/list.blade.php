@extends('admin.layout.index')

@section('title')
    NOTICE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Manage Notice</h4>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.Notice.add') }}">Add New Notice</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>File/Link</th>
                        <th>Notice Type</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($all_notice as $notice)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><b>{{ $notice->title }}</b></td>
                            <td>
                                @if (strlen($notice->description) > 300)
                                    {!! substr($notice->description, 0, 300) !!}...
                                @else
                                    {!! $notice->description !!}
                                @endif
                            </td>
                            <td>
                                @if ($notice->type == 'file')
                                    <a target="blank" class="btn btn-success btn-sm"
                                        href="{{ asset('file/' . $notice->file) }}">File</a>
                                @elseif ($notice->type == 'link')
                                    <a target="blank" class="btn btn-info btn-sm"
                                        href="{{  $notice->url }}">Link</a>
                                @endif
                            </td>
                            <td>{{ $notice->notice_type }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.Notice.edit', ['id' => $notice->id]) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger"
                                    onclick="confirmDelete('{{ route('admin.Notice.delete', ['id' => $notice->id]) }}')">Delete</a>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item?");

            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
