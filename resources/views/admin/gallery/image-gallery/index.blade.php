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
                                <form action="{{ route('admin.gallery.imagegallery.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                    @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Select
                                                Section <span class="required">*</span></label>
                                            <select class="form-select" aria-label="Default select example" name="image_section" required>
                                                <option value=" ">-- Select --</option>
                                                <option value="1">Convocation</option>
                                                <option value="2">Vastu Practical</option>
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
                                                <input type="file" class="form-control" placeholder="" name="image" required>
                                                <div class="size">Image size: width:1280px, height:960px</div>
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
                                        {{-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive"><!-- id="example2" -->
                                                    <table class="table table-bordered table-hover news-entry-view">
                                                        <thead>
                                                            <tr>
                                                                <th width="150">Image Section</th>
                                                                <th width="80">Image</th>
                                                                <th width="10">Edit</th>
                                                                <th width="40">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> Convocation</td>
                                                                <td class="product-thumb-img"><a
                                                                        href="javascript:void(0)"><img
                                                                            src="assets/images/gallery-img.jpeg"></a>
                                                                </td>
                                                                <td><a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                                </td>
                                                                <td><a href="#"><i class="far fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div> --}}
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
                                                    <th width="150">Image Section</th>
                                                    <th width="80">Image</th>
                                                    <th width="10">Edit</th>
                                                    <th width="40">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($galleryImageList))
                                                    @foreach ($galleryImageList as $key => $item)
                                                    <tr>
                                                        <td> {{ $item->image_section == 1 ? 'Convocation' : 'Vastu Practical' }}</td>
                                                        <td class="product-thumb-img"><a href="javascript:void(0)"><img
                                                                    src="{{ asset('uploads/image-gallery/' . $item->image ) }}"></a> </td>
                                                        <td><a href="{{ route('admin.gallery.imagegallery.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                                        </td>
                                                        <td><a href="{{ route('admin.gallery.imagegallery.delete', $item->id) }}"><i class="far fa-trash-alt"></i></a>
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
