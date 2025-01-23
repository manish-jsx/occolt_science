@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Image Gallery</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Gallery</a></li>
                                    <li class="breadcrumb-item active">Image Gallery</li>
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
                                <form action="{{ route('admin.gallery.imagegallery.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data" data-parsley-validate>
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Select
                                                    Section  <span class="required">*</span></label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="image_section" required>
                                                    <option value=" ">-- Select --</option>
                                                    <option value="1" {{ $data->image_section == 1 ? 'selected' : '' }}>Convocation</option>
                                                    <option value="2" {{ $data->image_section == 2 ? 'selected' : '' }}>Vastu Practical</option>
                                                </select>
                                                <div class="alert-danger">
                                                    @error('image_section')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <label for="example-text-input" class="form-label">Upload
                                                        Image  <span class="required">*</span></label>
                                                    <input type="file" class="form-control" placeholder="" name="image">
                                                    <div class="size">Image size: width:1280px, height:960px</div>
                                                    @if(!empty($data->image))

                                                    <a href="{{ asset('/uploads/image-gallery/'.$data->image) }}" target="_blank">
                                                        <img src="{{ asset('/uploads/image-gallery/'.$data->image) }}" alt="" width="100px;">
                                                    </a>
                                    
                                                    @endif
                                                    <div class="alert-danger">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-2">
                                                    <label for="example-text-input" class="form-label"
                                                        style="visibility: hidden; display: block;">&nbsp;</label>
                                                    <button type="submit" class="btn btn-primary">Add More</button>
                                                </div> --}}
                                            </div>
                                         
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <div class="col-sm-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>


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
