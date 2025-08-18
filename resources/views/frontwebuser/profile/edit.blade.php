@extends('frontwebuser.layout.index')

@section('title')
    Change Password
@endsection

@section('content')
    <div class="d-md-flex align-items-md-start">
        <!-- Left sidebar component -->
        <div
            class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- Profile Card -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top"
                        style="background-image: url(images/backgrounds/panel_bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="{{ asset($edit_adminuser->image) }}" width="170"
                                height="170" alt="">
                        </div>
                        <h6 class="font-weight-semibold mb-0">{{ $edit_adminuser->name }}</h6>
                        <span class="d-block opacity-75">{{ $edit_adminuser->email }}</span>

                        @if ($edit_adminuser->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <br>
                    </div>
                </div>
                <!-- /Profile Card -->
            </div>
        </div>
        <!-- /Left sidebar component -->

        <!-- Right content -->
        <div class="tab-content w-50 overflow-auto">
            <div class="tab-pane fade active show" id="profile">
                <!-- Password Change Card -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Change Password</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('frontwebuser.profile.password.update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Password Change Card -->
            </div>
        </div>
        <!-- /Right content -->
    </div>
@endsection
