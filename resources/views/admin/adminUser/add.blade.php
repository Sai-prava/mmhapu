@extends('admin.layout.index')

@section('title')
    Add Admin User
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Admin Users</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.AdminUser.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Password<span style="color: red">*</span></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
