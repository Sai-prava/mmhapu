@extends('admin.layout.index')

@section('title')
    IQAC EVENT TITLE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add IQAC Event Title</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.IqacEventTitle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="year" class="form-label">Year<span style="color: red">*</span></label>
                        {{-- <input type="number" class="form-control" name="year" placeholder="Enter Year" min="2000" max="2200" step="1" required> --}}
                        <select name="year_id" class="form-control">
                            <option value="">Select Year</option>
                            @foreach ($years as $year)
                                <option value=" {{ $year->id }} " {{ old('year_id') == $year->id ? 'selected' : '' }}> {{ $year->year }} </option>
                            @endforeach
                        </select>
                        @error('title')
                            <span class="text-danger"> {{ 'Year field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="image" class="form-label">Image<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                        @error('image')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
