@extends('admin.layout.index')

@section('title')
    Edit Admin User
@endsection

@section('content')
    {{-- <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Admin Users</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.AdminUser.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit_adminuser->id}}">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$edit_adminuser->name}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$edit_adminuser->email}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                        <img class="pl-3 pt-2" src="{{asset($edit_adminuser->image)}}" width="90" alt="">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter New Password">
                        <span style="color: red">Do you Want to Change Old Password!</span>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div> --}}

    <div class="d-md-flex align-items-md-start">
        <!-- Left sidebar component -->
        <div
            class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- Navigation -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top"
                        style="background-image: url(images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="{{ asset($edit_adminuser->image) }}" width="170"
                                height="170" alt="">
                        </div>
                        <h6 class="font-weight-semibold mb-0">{{ $edit_adminuser->name }}</h6>
                        <span class="d-block opacity-75">{{ $edit_adminuser->email }}</span>
                        {{-- <span class="badge badge-success">Verified</span> --}}

                        @if ($edit_adminuser->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif

                        <br>
                    </div>
                </div>
                <!-- /navigation -->
            </div>
            <!-- /sidebar content -->
        </div>
        <!-- /left sidebar component -->
        <!-- Right content -->
        <div class="tab-content w-100 overflow-auto">
            <div class="tab-pane fade active show" id="profile">
                <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Profile information</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.AdminUser.update') }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id" value="{{ $edit_adminuser->id }}">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $edit_adminuser->name }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" value="{{ $edit_adminuser->email }}" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Password <small style="color:red;">(Leave It Blank if you don't want to
                                                change)</small></label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload profile image</label>
                                        <input type="file" class="form-input-styled" name="image" data-fouc>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Status:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="1"
                                                {{ $edit_adminuser->status === 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status_active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                value="0" {{ $edit_adminuser->status === 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="status_inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /profile info -->
            </div>
        </div>
        <!-- /right content -->
    </div>
@endsection
