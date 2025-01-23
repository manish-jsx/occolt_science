@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">View Enquiry</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Enquiry</a></li>
                                    <li class="breadcrumb-item active">View Enquiry</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="table-responsive"><!-- id="example2" -->
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                    <th width="20">S. No.</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th width="15">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contactUs as $key => $item)
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->message }}</td>
                                                         <td><a href="{{ route('admin.contact_us.delete', $item->id) }}"
                                                                 onclick="return confirm('Are you sure want to delete this Enquiry ?')"><i
                                                                     class="far fa-trash-alt text-danger"></i></a></td>
                                                     </tr>
                                                @endforeach
                                                {{-- <tr>
                                              <td><input type="checkbox" name=""></td>
                                              <td><img src="{{ asset('admin/assets/images/2e2jega.jpg') }}"></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>

                                              <td><a href="#" class="active2">Active</a></td>
                                              <td><a href="#"><i
                                                          class="fas fa-pencil-alt text-success"></i></a>
                                              </td>
                                              <td><a href="#"><i
                                                          class="far fa-trash-alt text-danger"></i></a></td>
                                          </tr>


                                          <tr>
                                              <td><input type="checkbox" name=""></td>
                                              <td><img src="{{ asset('admin/assets/images/2e2jega.jpg') }}"></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>
                                              <td><a href="#"></a></td>

                                              <td><a href="#" class="active2">Active</a></td>
                                              <td><a href="#"><i
                                                          class="fas fa-pencil-alt text-success"></i></a>
                                              </td>
                                              <td><a href="#"><i
                                                          class="far fa-trash-alt text-danger"></i></a></td>
                                          </tr> --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
       
@endsection
