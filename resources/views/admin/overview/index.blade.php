@extends('admin.layout.index')

@section('title')
    Institution Overview
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Update Institution Overview</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Overview.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input name="id" type="hidden" value="{{ isset($overview->id) ? $overview->id : -1 }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Faculties<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="faculties"
                            value="{{ isset($overview->faculties) ? $overview->faculties : '' }}">
                        @error('faculties')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Departments<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="departments"
                            value="{{ isset($overview->departments) ? $overview->departments : '' }}">
                        @error('departments')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Centres<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="centres"
                            value="{{ isset($overview->centres) ? $overview->centres : '' }}">
                        @error('centres')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Programmes<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="programmes"
                            value="{{ isset($overview->programmes) ? $overview->programmes : '' }}">
                        @error('programmes')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">e-Resources<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="e_resources"
                            value="{{ isset($overview->e_resources) ? $overview->e_resources : '' }}">
                        @error('e_resources')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">MOU<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="mou"
                            value="{{ isset($overview->mou) ? $overview->mou : '' }}">
                        @error('mou')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Students<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="students"
                            value="{{ isset($overview->students) ? $overview->students : '' }}">
                        @error('students')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Scholars<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="scholars"
                            value="{{ isset($overview->scholars) ? $overview->scholars : '' }}">
                        @error('scholars')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection