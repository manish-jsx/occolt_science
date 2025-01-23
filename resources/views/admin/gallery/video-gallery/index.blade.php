@extends('admin/layouts/master_admin')
@section('section')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Video Gallery</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Gallery</a></li>
                                    <li class="breadcrumb-item active">Video Gallery</li>
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
                                <form action="{{ route('admin.gallery.videogallery.store') }}" method="POST"
                                    enctype="multipart/form-data" data-parsley-validate>
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Video Title <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="" name="title"
                                                    required>
                                                    <div class="alert-danger">
                                                        @error('title')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Video Link <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="" name="url"
                                                    required>
                                                    <div class="alert-danger">
                                                        @error('url')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="mb-3 col-md-10">
                                                    <label for="example-text-input" class="form-label">Upload Video
                                                        Thumb <span class="required">*</span></label>
                                                    <input type="file" class="form-control" placeholder="" name="image"
                                                        required>
                                                    <div class="size">Image size: width:800px, height:600px</div>
                                                    <div class="alert-danger">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
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


                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="table-responsive"><!-- id="example2" -->
                                        <table class="table table-bordered table-hover news-entry-view">
                                            <thead>
                                                <tr>
                                                    <th width="150">Video Title</th>
                                                    <th width="150">Video Link</th>
                                                    <th width="80">Image</th>
                                                    <th width="10">Edit</th>
                                                    <th width="40">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($galleryVideoList))
                                                    @foreach ($galleryVideoList as $key => $item)
                                                    <tr>
                                                        <td> {{ $item->title }}</td>
                                                        <td> <a href="{{ $item->url }}" target="_blank">Video Link</a></td>
                                                        <td class="product-thumb-img"><a href="javascript:void(0)"><img
                                                                    src="{{ asset('uploads/video-gallery/' . $item->image) }}"></a> </td>
                                                        <td><a href="{{ route('admin.gallery.videogallery.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
                                                        <td><a href="{{ route('admin.gallery.videogallery.delete', $item->id) }}"><i class="far fa-trash-alt"></i></a></td>
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
       
    <!-- end main content-->
@endsection
