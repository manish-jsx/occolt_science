@extends('admin/layouts/master_admin')
@section('section')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Application Form</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Dashboard</a></li>
                                <li class="breadcrumb-item active">Application Form</li>
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
                                                <th width="">Course</th>
                                                <th width="">Phone Number</th>
                                                <th width="">Email Id</th>
                                                {{-- <th width="15">Status</th> --}}
                                                <th width="10">View</th>
                                                {{-- <th width="40">Delete</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($applicationForm))
                                                @foreach ($applicationForm as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->course }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        {{-- <td><a href="#" class="active2">Active</a></td> --}}
                                                        <td><a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#application{{ $item->id }}"><i class="fas fa-eye"></i>
                                                            </a></td>
                                                        {{-- <td><a href="#"><i class="far fa-trash-alt"></i></a></td> --}}
                                                    </tr>
                                                @endforeach
                                            @endif


                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="d-flex justify-content-end">
                                {{ $applicationForm->links('pagination::bootstrap-4') }}
                            </div>



                        </div>
                    </div>
                </div>
                <!-- end col -->

           

            </div>
        </div>
        <!-- container-fluid -->
    </div>




    <!-- Modal -->
    @if (!empty($applicationForm))
        @foreach ($applicationForm as $key => $item)
            <div class="modal fade applicationFormModal" id="application{{ $item->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">

                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Application Form Preview</h1> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <section id="container">
                                <section id="main-content">
                                    <section class="wrapper">
                                        <div class="form-w3layouts">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <section class="panel">
                                                        <div class="panel-body">
                                                            <div style="border:solid 3px #000;padding:20px;">
                                                                <div class="row">
                                                                    <div class="col-md-2 col-xs-2">
                                                                        <img src="{{ asset('admin') }}/assets/images/logo-o.png"
                                                                            style="margin-top:20px; width: 110px;">
                                                                    </div>
                                                                    <div class="col-md-10 col-xs-10">
                                                                        <center>
                                                                            <h4>ALL INDIA INSTITUTE OF OCCULT SCIENCE</h4>
                                                                            <p><b>Website: www.occultscience.in</b></p>
                                                                            <p>Email: occultscience.in@gmail.com,
                                                                                info@occultscience.in</p>
                                                                            <p>Office: +91 9871-92-3444, +91 9871-74-3444
                                                                            </p>
                                                                        </center> <br>
                                                                        <div class="row">
                                                                            <div class="col-md-1"></div>
                                                                            <div class="col-md-10">
                                                                                <center>
                                                                                    <h2 style="border:solid 2px #000;padding:5px;">
                                                                                        Admission Form</h2>
                                                                                </center>
                                                                            </div>
                                                                            <div class="col-md-1"></div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <hr>



                                                                <div class="row">

                                                                    <div class="col-md-2 col-xs-2">

                                                                        <p style="color: #000;">
                                                                            <b>Registration&nbsp;No.:</b>

                                                                    </div>

                                                                    <div class="col-md-4 col-xs-4">

                                                                        <p style="border-bottom: dotted;"></p>

                                                                    </div>

                                                                    <div class="col-md-2 col-xs-2">

                                                                        <p style="color: #000;"><b>Roll&nbsp;No.:</b>

                                                                    </div>

                                                                    <div class="col-md-4 col-xs-4">

                                                                        <p style="border-bottom: dotted;"></p>

                                                                    </div>

                                                                </div>

                                                                <div class="row" style="margin-top: 5px;">

                                                                    <div class="col-md-12 col-xs-12">

                                                                        <table class="table table-bordered">

                                                                            <tr style="border: solid 2px black;">

                                                                                <td class="course-col-td"
                                                                                    style="color:#000;">
                                                                                    Courses&nbsp;:</td>

                                                                                <td style="color:#313533;">{{ $item->course }} ||
                                                                                    {{ $item->subcourse }}</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <table class="table" style="margin-top: -18px;">
                                                                            <tr class="img-table-col"
                                                                                style="border: solid 2px black;">

                                                                                <td style="color:#000;">Name&nbsp;:</td>

                                                                                <td style="color:#313533;">{{ $item->name }}</td>

                                                                            </tr>

                                                                            <tr style="border: solid 2px black;">

                                                                                <td class="img-table-col"
                                                                                    style="color:#000;">
                                                                                    {{ $item->guardians }} :</td>

                                                                                <td style="color:#313533;">{{ $item->guardians_name }}</td>

                                                                            </tr>

                                                                            <tr style="border: solid 2px black;">

                                                                                <td class="img-table-col"
                                                                                    style="color:#000;">
                                                                                    Correspondence&nbsp;Address :</td>

                                                                                <td style="color:#313533;">{{ $item->correspondence_address }}</td>

                                                                            </tr>

                                                                        </table>

                                                                    </div>

                                                                    <div class="col-md-3">

                                                                        <div
                                                                            style="border: solid 2px black;padding:10px;margin-top: -18px;">

                                                                            <div style="border: solid 2px black;">

                                                                                <img src="{{ asset('uploads/addmission-form/foto/' . $item->photo) }}"
                                                                                    style="width:100%;">

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-12 col-xs-12">

                                                                        <table class="table table-bordered"
                                                                            style="margin-top: -22px;">

                                                                            <tr style="border: solid 2px black;">

                                                                                <td class="table-second-col"
                                                                                    style="color:#000;">
                                                                                    <b>Mobile&nbsp;Number:</b> <br>
                                                                                    <span style="color: #313533;">
                                                                                        {{ $item->phone }}
                                                                                    </span>
                                                                                </td>

                                                                                <td class="table-second-col"
                                                                                    style="color:#000;">
                                                                                    <b>Whatsapp&nbsp;Number:</b> <br>
                                                                                    <span style="color:#313533">
                                                                                        {{ $item->Whatsapp_number }}</span>
                                                                                </td>

                                                                                <td class="table-second-col"
                                                                                    style="color:#000;">
                                                                                    <b>Alternate&nbsp;Mobile&nbsp;Number:</b>
                                                                                    <br>
                                                                                    <span
                                                                                        style="color:#313533 ;">{{ $item->alternate_phone }}</span>
                                                                                </td>

                                                                            </tr>

                                                                        </table>

                                                                    </div>

                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-12 col-xs-12">
                                                                        <table class="table table-bordered"
                                                                            style="margin-top: -22px;">

                                                                            <tr style="border: solid 2px black;">

                                                                                {{-- <td class="table-first-col"
                                                                                    style="color:#000;">
                                                                                    <b>Sex:</b> <span
                                                                                        style="color: #313533;">Male</span>
                                                                                </td> --}}

                                                                                <td style="color:#000;">
                                                                                    <b>Date&nbsp;Of&nbsp;Birth:</b><span
                                                                                        style="color: #313533;">
                                                                                        {{ $item->date_of_birth }}</span>
                                                                                </td>

                                                                            </tr>

                                                                        </table>



                                                                    </div>

                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-12 col-xs-12">

                                                                        <table class="table table-bordered edu-form-table"
                                                                            style="margin-top: -22px;">

                                                                            <tr style="border: solid 2px black;">

                                                                                <td class="table-first-col"
                                                                                    style="color:#000;">
                                                                                    <b>Education&nbsp;Qualification:</b>
                                                                                    <span
                                                                                        style="color: #313533;">{{ $item->education_qualification }}</span>
                                                                                </td>

                                                                                <td style="color:#000;">
                                                                                    <b>E-Mail:</b>&nbsp;<span
                                                                                        style="color: #313533;">{{ $item->email }}</span>
                                                                                </td>

                                                                            </tr>

                                                                        </table>

                                                                    </div>

                                                                </div>

                                                                <h4
                                                                    style="font-size: 18px; margin-top: 10px; color: #000;">
                                                                    Declaration By The Student</h4>
{{-- 
                                                                <p>I here by solemnly declare and affirm that</p>

                                                                <ol style="">

                                                                    <li>I will abide by the rules laid down by the
                                                                        Management</li> --}}

                                                                    <li>{{ $item->terms_and_conditions }} </li>

                                                                </ol>

                                                                <div class="row" style="margin-top: 20px;">

                                                                    <div class="col-md-6 col-xs-6">

                                                                        <h4 style="font-size: 18px; color: #000;">Date &
                                                                            Time: -
                                                                            {{ \Carbon\Carbon::parse($item->created_at)->format('l, M d, Y') }} <br> &
                                                                            {{ \Carbon\Carbon::parse($item->created_at)->format('h:i:s A') }}</h4>

                                                                    </div>

                                                                    <div class="col-md-6 col-xs-6">

                                                                        <p style="text-align:right;">
                                                                            <img src="{{ asset('uploads/addmission-form/signature/' . $item->signature) }}"
                                                                                style="width:150px; padding-right: 10px;">
                                                                        </p>

                                                                        <h4
                                                                            style="text-align:right; color: #000; font-size: 18px;">
                                                                            Signature Of The Student:
                                                                        </h4>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </section>

                                                </div>

                                            </div>

                                        </div>

                                    </section>



                                </section>



                                <!--main content end-->

                            </section>
                        </div>



                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
