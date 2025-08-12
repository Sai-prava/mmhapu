@extends('admin.layout.index')

@section('title')
    Quick Link Title
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <form class="needs-validation" action="{{ route('admin.qtitle.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$edit->id}}">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Quicklink Title</h5>
                            </div>
                            <div class="card-block pdng">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title<span>*</span></label>
                                    <input type="text" class="form-control" name="title" value="{{$edit->title}}" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                    {{ __('btn_save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
