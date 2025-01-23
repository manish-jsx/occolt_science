@extends('admin/layouts/master_admin')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">General Enquiries</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Enquiries</a></li>
                                <li class="breadcrumb-item active">General Enquiries</li>
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
                                                <th width="">Mobile Number</th>
                                                <th width="">Email Id</th>
                                                <th width="40">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($genralenquiry))
                                                @foreach ($genralenquiry as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td><a
                                                                href="{{ route('admin.enquiry.deletegenralenquiry', $item->id) }}"><i
                                                                    class="far fa-trash-alt"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
                                        @if ($genralenquiry->onFirstPage())
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">Previous</a>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $genralenquiry->previousPageUrl() }}">Previous</a>
                                            </li>
                                        @endif
    
                                        @foreach ($genralenquiry->getUrlRange(1, $genralenquiry->lastPage()) as $page => $url)
                                            @if ($page == $genralenquiry->currentPage())
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">{{ $page }}</a></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
    
                                        @if ($genralenquiry->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $genralenquiry->nextPageUrl() }}">Next</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0);">Next</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
    
                            <!--  <div class="row">
                                        <nav aria-label="...">
                                            <ul class="pagination justify-content-end">
                                                 {{-- {{ $genralenquiry->links() }} --}}
                                                <li class="page-item disabled">
                                                    <a class="page-link">Previous</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item" aria-current="page">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> -->


                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="row d-flex justify-content-end mb-lg-4">
                    <a href="{{ route('admin.enquiry.gernralenquiryexport') }}"
                        class="btn btn-primary d-inline-block me-lg-3" style="width: auto">
                        <i class="far fa-file-excel"></i> Download Data in Excel
                    </a>
                    <!-- <button type="submit" class="btn btn-primary d-inline-block me-lg-3" style="width: auto" fdprocessedid="ivli7">Save</button> -->
                </div>

            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection
