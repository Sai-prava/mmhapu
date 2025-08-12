@extends('admin.layout.index')

@section('title')
    Study Materials
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Study Materials</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.studyMaterial.insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">University Authority<span style="color: red">*</span></label>
                        <select name="team_id" class="form-control">
                            <option value="">Select University Authority</option>
                            @foreach ($add as $team)
                                <option value=" {{ $team->id }} " {{ old('team_id') == $team->id ? 'selected' : '' }}> {{ $team->name }} </option>
                            @endforeach
                        </select>
                        @error('team_id')
                            <span class="text-danger"> {{ 'University Authority is Required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">List<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="list" placeholder="Enter List" value="{{ old('list') }}">
                        @error('list')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">PDF<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="pdf" placeholder="Enter PDF" accept=".pdf" value="{{ old('list') }}">
                        @error('pdf')
                        <span class="text-danger">{{ $message }}</span>
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
