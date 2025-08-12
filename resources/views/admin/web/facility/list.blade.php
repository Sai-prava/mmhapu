@extends('admin.layout.index')

@section('title')
    FACILITY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Facility</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.facility.add') }}">Add New Facility</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($facilities as $facility)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $facility->title }}</td>
                        <td>{!! $facility->description !!}</td>
                        <td>
                            @php
                                $images = json_decode($facility->images, true);
                                $imageCount = 0;
                            @endphp
                            @if (is_array($images))
                                @foreach ($images as $image)
                                    @if ($imageCount < 4)
                                        <img src="{{ asset('Facility/' . $image) }}" alt=""
                                            style="width: 100px; height: auto; margin: 5px;">
                                        @php
                                            $imageCount++; // Increment the counter
                                        @endphp
                                    @else
                                        @break
                                    @endif
                                @endforeach
                            @else
                                No images available.
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.facility.edit', $facility->id) }}"><i class="far fa-edit"></i>
                                Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.facility.delete', $facility->id) }}')"><i
                                    class="fas fa-trash-alt"></i> Delete</a>
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
            var isConfirmed = confirm("Are you sure you want to delete this Facility ?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
