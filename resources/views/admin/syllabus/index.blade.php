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
                                <form action="{{ route('admin.syllabus.store') }}" method="POST"
                                    enctype="multipart/form-data" data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Upload Image <span class="required">*</span></label>
                                                <input type="file" class="form-control" placeholder="" name="image" required>
                                                <div class="size text-start"> image size: width:150px, height:150px</div>
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
                                                <input type="file" class="form-control" placeholder="" name="file"
                                                    required>
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
                                                    <input type="text" class="form-control" name="course_name" value="{{ old('course_name') }}" required>
                                                {{-- <select class="form-select" aria-label="Default select example"
                                                    name="course_name" required>
                                                    <option value=" ">-- Select --</option>
                                                    <option value="Astrology">Astrology</option>
                                                    <option value="Vaastu">Vaastu</option>
                                                    <option value="Numerology">Numerology</option>
                                                    <option value="Palmistry">Palmistry</option>
                                                    <option value="Reiki">Reiki</option>
                                                    <option value="Tarot">Tarot</option>
                                                </select> --}}
                                                <div class="alert-danger">
                                                    @error('course_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Active/Deactive</label>
                                                <select class="form-select" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
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


                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="table-responsive"><!-- id="example2" -->
                                        <table class="table table-bordered table-hover news-entry-view">
                                            <thead>
                                                <tr>
                                                    <th width="5">S.No.</th>
                                                    <th width="150">Course</th>
                                                    <th width="60">Image</th>
                                                    <th width="80">Syllabus</th>
                                                    <th width="15">Status</th>
                                                    <th width="10">Edit</th>
                                                    <th width="40">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($syllabusList))
                                                    @foreach ($syllabusList as $key => $item)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td> {{ $item->course_name }}</td>
                                                            <td>
                                                                <a href="{{ asset('uploads/syllabus/image/' . $item->image) }}" target="_blank">
                                                                <img src="{{ asset('uploads/syllabus/image/' . $item->image) }}" alt="" width="40">
                                                                </a>
                                                            </td>
                                                            <td class="product-thumb-img"><a href="{{ asset('uploads/syllabus/' . $item->file ) }}"
                                                                    target="_blank">View
                                                                    Syllabus</a></td>
                                                            <td><a href="#"
                                                                    class="active2">{{ $item->status == 1 ? 'Active' : 'Deactive' }}</a>
                                                            </td>
                                                            <td><a href="{{ route('admin.syllabus.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                                            </td>
                                                            <td><a href="{{ route('admin.syllabus.delete', $item->id) }}"><i class="far fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif

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
