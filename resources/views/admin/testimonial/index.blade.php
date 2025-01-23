@extends('admin/layouts/master_admin')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">
                            Testimonial</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>

                                <li class="breadcrumb-item active">Testimonial</li>
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
                                        <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype='multipart/form-data' data-parsley-validate>
                                        @csrf
                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="example-text-input" class="form-label">Testimonial
                                                    Title  <span class="required">*</span></label>
                                                <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
                                                <div class="alert-danger">
                                                    @error('title')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="example-text-input" class="form-label">Testimonial
                                                    Name  <span class="required">*</span></label>
                                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                                                <div class="alert-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="example-text-input"
                                                    class="form-label">Destination  <span class="required-field">*</span></label>
                                                <input class="form-control" type="text" name="destination" value="{{ old('destination') }}" required>
                                                <div class="alert-danger">
                                                    @error('destination')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="example-text-input"
                                                    class="form-label">Image  <span class="required">*</span></label>
                                                <input class="form-control" type="file" name="image" required>
                                                <div class="size text-start">(Image size: width:165px,
                                                    height:236px)</div>
                                                    <div class="alert-danger">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div> --}}

                                       




                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Testimonial
                                                    Content  <span class="required-field">*</span></label>
                                                <textarea class="form-control" name="content" id="" cols="30" rows="6" required>{{ old('content') }}</textarea>
                                                <div class="alert-danger">
                                                    @error('content')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="example-text-input"
                                                    class="form-label">Active/Deactive</label>
                                                <select class="form-select" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
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




                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="table-responsive"><!-- id="example2" -->
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>

                                                <th width="80">Sl No.</th>
                                                <th width="500">Testimonial Name</th>
                                                <th width="500">Destination</th>
                                                {{-- <th width="500">Testimonial Image</th> --}}
                                                <th width="500">Testimonial Content</th>
                                                <th width="15">Status</th>
                                                <th width="10">Edit</th>
                                                <th>Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonialList as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->destination }}</td>
                                                {{-- <td><img src="{{ asset('uploads/testimonial/' . $item->image) }}" alt="" width="100"></td> --}}
                                                <td>{{ $item->content }}</td>
                                                <td><a href="#" class="active2">{{ $item->status == 1 ? 'Active' : 'Deactive' }}</a></td>
                                                <td><a href="{{ route('admin.testimonial.edit', $item->id) }}"><i
                                                            class="fas fa-pencil-alt text-success"></i></a>
                                                </td>
                                                <td><a href="{{ route('admin.testimonial.delete', $item->id) }}" onclick="return confirm('Are you sure want to delete this testimonial ?')"><i
                                                            class="far fa-trash-alt text-danger"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>

                                                <td>1</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td></td>
                                                <td><a href="#" class="active2">Active</a></td>
                                                <td><a href="#"><i
                                                            class="fas fa-pencil-alt text-success"></i></a>
                                                </td>
                                                <td><a href="#"><i
                                                            class="far fa-trash-alt text-danger"></i></a>
                                                </td>
                                            </tr> --}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
   
@endsection
