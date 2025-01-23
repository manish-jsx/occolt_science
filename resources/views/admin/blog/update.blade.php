@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">
                                Edit Blog</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>

                                    <li class="breadcrumb-item active">Edit Blog</li>
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
                                    <form action="{{ route('admin.blog.update', $data->id) }}" method="POST"
                                        enctype='multipart/form-data' data-parsley-validate>
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">

                                                        <label for="example-text-input" class="form-label"> Blog
                                                            Image <span class="required-field">*</span></label>
                                                        <input class="form-control" type="file" name="image">
                                                        <div class="size text-start">(Large image size: width:852px,
                                                            height:508px, small image size: width:360px,
                                                            height:230px)</div>
                                                            @if(!empty($data->image))

                                                            <a href="{{ asset('/uploads/Blog/LargeImg/'.$data->image) }}" target="_blank">
                                                                <img src="{{ asset('/uploads/Blog/LargeImg/'.$data->image) }}" alt="" width="100px;">
                                                            </a>
                                            
                                                            @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6"></div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">

                                                        <label for="example-text-input" class="form-label"> Blog
                                                            Title <span class="required-field">*</span></label>
                                                        <input class="form-control" type="text" name="title" value="{{ $data->title }}" required>
                                                            <div class="alert-danger">
                                                                @error('title')
                                                                    {{ $message }}
                                                                @enderror
                                                            </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6"></div>

                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Short
                                                        Description <span class="required-field">*</span></label>
                                                    <textarea class="form-control" name="short_description" id="" cols="30" rows="6" required>{{ $data->short_description }}</textarea>
                                                    <div class="alert-danger">
                                                        @error('short_description')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Full
                                                        Description <span class="required-field">*</span></label>
                                                    <textarea name="full_description">{{ $data->full_description }}</textarea>
                                                    <div class="alert-danger">
                                                        @error('full_description')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-text-input"
                                                        class="form-label">Active/Deactive</label>
                                                    <select class="form-select" name="status">
                                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }} >Active</option>
                                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Deactive</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="col-sm-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
       

    <script src="{{ asset('admin/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('full_description');
    </script>
@endsection
