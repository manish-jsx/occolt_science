@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Upload Syllabus</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item active">Upload Syllabus</li>
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
                                <form action="{{ route('admin.syllabus.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data" data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Upload Image <span class="required">*</span></label>
                                                <input type="file" class="form-control" placeholder="" name="image">
                                                <div class="size text-start"> image size: width:150px, height:150px</div>
                                                @if (!empty($data->image))
                                                    <a href="{{ asset('uploads/syllabus/image/' . $data->image) }}" target="_blank">
                                                    <img src="{{ asset('uploads/syllabus/image/' . $data->image) }}" width="40" alt="">
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
                                                <label for="example-text-input" class="form-label">Upload
                                                    Syllabus <span class="required">*</span></label>
                                                <input type="file" class="form-control" placeholder="" name="file">
                                                <a href="{{ asset('uploads/syllabus/' . $data->file) }}" target="_blank">view file</a>
                                                <div class="alert-danger">
                                                    @error('file')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Select
                                                    Course <span class="required">*</span></label>
                                                    <input type="text" name="course_name" value="{{ $data->course_name }}" class="form-control" id="" required>
                                                {{-- <select class="form-select" aria-label="Default select example"
                                                    name="course_name" required>
                                                    <option value=" ">-- Select --</option>
                                                    <option value="Astrology" {{ $data->course_name == 'Astrology' ? 'selected' : '' }}>Astrology</option>
                                                    <option value="Vaastu" {{ $data->course_name == 'Vaastu' ? 'selected' : '' }}>Vaastu</option>
                                                    <option value="Numerology" {{ $data->course_name == 'Numerology' ? 'selected' : '' }}>Numerology</option>
                                                    <option value="Palmistry" {{ $data->course_name == 'Palmistry' ? 'selected' : '' }}>Palmistry</option>
                                                    <option value="Reiki" {{ $data->course_name == 'Reiki' ? 'selected' : '' }}>Reiki</option>
                                                    <option value="Tarot" {{ $data->course_name == 'Tarot' ? 'selected' : '' }}>Tarot</option>
                                                </select> --}}
                                                <div class="alert-danger">
                                                    @error('course_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="clearfix"></div> --}}


                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Active/Deactive</label>
                                                <select class="form-select" name="status">
                                                    <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
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
