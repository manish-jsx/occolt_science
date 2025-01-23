@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">
                                Change Password</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>

                                    <li class="breadcrumb-item active">Change Password</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ route('admin.new_password') }}" method="POST">
                                        @csrf
                                        <div class="col-lg-12">
                                            <div>
                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">Old
                                                        Password</label>
                                                    <input class="form-control" type="password" name="password" required>
                                                    <div class="alert-danger">
                                                        @error('password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">New
                                                        Password</label>
                                                    <input class="form-control" type="password" name="new_password"
                                                        required>
                                                    <div class="alert-danger">
                                                        @error('new_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">Confirm
                                                        Password</label>
                                                    <input class="form-control" type="password" name="confirm_password"
                                                        required>
                                                    <div class="alert-danger">
                                                        @error('confirm_password')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="col-sm-auto">
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>





                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
       
@endsection
