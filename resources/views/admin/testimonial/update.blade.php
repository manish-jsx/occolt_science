@extends('admin/layouts/master_admin')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">
                            Edit Testimonial</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>

                                <li class="breadcrumb-item active">Edit Testimonial</li>
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
                                <div class="col-lg-12">
                                    <div class="row">
                                        <form action="{{ route('admin.testimonial.update', $data->id) }}" method="POST"
                                            enctype='multipart/form-data' data-parsley-validate>
                                            @csrf
                                            

                                            <div class="col-md-6">
                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">Testimonial
                                                        Name <span class="required">*</span></label>
                                                    <input class="form-control" type="text" name="name"
                                                        value="{{ $data->name }}" placeholder="e.g" required>
                                                    <div class="alert-danger">
                                                        @error('name')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-md-6">
                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">Destination <span
                                                            class="required">*</span></label>
                                                    <input class="form-control" type="text" name="destination"
                                                        value="{{ $data->destination }}" placeholder="e.g" required>
                                                    <div class="alert-danger">
                                                        @error('destination')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            {{-- <div class="col-md-6">
                                                <div class="mb-3">

                                                    <label for="example-text-input" class="form-label">Image <span
                                                            class="required">*</span></label>
                                                    <input class="form-control" type="file" name="image" required>
                                                    <div class="size text-start">(Image size: width:165px,
                                                        height:236px)</div>
                                                    @if (!empty($data->image))
                                                        <a href="{{ asset('/uploads/testimonial/' . $data->image) }}"
                                                            target="_blank">
                                                            <img src="{{ asset('/uploads/testimonial/' . $data->image) }}"
                                                                alt="" width="100px;">
                                                        </a>
                                                    @endif

                                                </div>
                                            </div> --}}




                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Testimonial
                                                        Content <span class="required">*</span></label>
                                                    <textarea class="form-control" name="content" id="" cols="30" rows="6" required>{{ $data->content }}</textarea>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-text-input"
                                                        class="form-label">Active/Deactive</label>
                                                    <select class="form-select" name="status">
                                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>
                                                            Deactive</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6"></div>

                                            <div class="mb-3">
                                                <div class="col-sm-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
