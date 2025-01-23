@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Upload Banner</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item active">Upload Banner</li>
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
                                <form action="{{ route('admin.banner.update', $data->id) }}" method="POST"
                                    enctype='multipart/form-data' data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Upload Banner <span class="required">*</span></label>
                                                <input type="file" class="form-control" placeholder="" name="image">
                                                <div class="size">Image size: width:1880px, height:712px</div>
                                                @if(!empty($data->image))

                                                <a href="{{ asset('/uploads/banner/'.$data->image) }}" target="_blank">
                                                    <img src="{{ asset('/uploads/banner/'.$data->image) }}" alt="" width="100px;">
                                                </a>
                                
                                                @endif
                                                <div class="alert-danger">
                                                    @error('image')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Banner Title <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="" name="title" value="{{ $data->title }}"
                                                    required>
                                                    <div class="alert-danger">
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>




                                        <div class="clearfix"></div>


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Active/Deactive</label>
                                                <select class="form-select" name="status">
                                                    <option value="1" {{ $data->status == 1 ? 'seleted' : '' }}>Active</option>
                                                    <option value="0" {{ $data->status == 0 ? 'seleted' : '' }}>Deactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <div class="col-sm-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>


                      




                    </div>
                    <!-- end col -->

                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
       
@endsection
