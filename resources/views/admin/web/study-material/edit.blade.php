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
            <form action="{{ route('admin.studyMaterial.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">University Authority<span style="color: red">*</span></label>
                        <select name="team_id" class="form-control">
                            <option value="">Select University Authority</option>
                            @foreach ($team as $data)
                                <option value=" {{ $data->id }} " {{ $data->id == $edit->team_id ? 'selected' : '' }}>
                                    {{ $data->name }} </option>
                            @endforeach
                        </select>
                        @error('team_id')
                            <span class="text-danger">{{ 'University Authority is Required' }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">List<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="list" placeholder="Enter List"
                            value="{{ $edit->list }}">
                        @error('list')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">PDF<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="pdf" accept=".pdf" placeholder="Enter PDF"
                            value="{{ old('list') }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">PDF<span style="color: red">*</span></label>
                        <br>
                        <a href="{{ asset('Team/'. $edit->pdf) }}" target="_blank" class="text-warning">{{  $edit->pdf }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
