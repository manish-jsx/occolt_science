@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Enquiries</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Enquiries</a></li>
                                    <li class="breadcrumb-item active">Enquiries</li>
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
                                        <table class="table table-bordered table-hover news-entry-view">
                                            <thead>
                                                <tr>
                                                    <th width="5">S.No.</th>
                                                    <th width="">Name</th>
                                                    <th width="">Course</th>
                                                    <th width="">Mobile Number</th>
                                                    <th width="40">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($enquiry))
                                                    @foreach ($enquiry as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->course }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td><a href="{{ route('admin.enquiry.delete_enquiry', $item->id) }}"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr> 
                                                    @endforeach
                                                @endif
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    {{ $enquiry->links('pagination::bootstrap-4') }}
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
