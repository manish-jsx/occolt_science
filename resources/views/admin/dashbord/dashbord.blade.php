@extends('admin/layouts/master_admin')
@section('section')
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="card card-h-100 dashboardCard">
            <div class="card-body" onclick="location.href = '{{ route('admin.applicationform') }}';" type="button">
              <div class="row align-items-center">
                <div class="col-md-8">
               
                  <span class="new-user mb-3 title">Application Forms</span>
                  <h4 class="mt-0" style="margin-bottom: 0px;"> <span class="counter" data-final-value="{{ $TotalApplicationForms }}">0</span>
                  </h4>
             
                  <!-- <small>In Last 30 Days</small> -->
                </div>
                <div class="col-md-4 border2">
                  <div class="dashcardImg">
                    <img src="{{ asset('admin') }}/assets/images/application-form.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="card card-h-100 dashboardCard">
            <div class="card-body" onclick="location.href = '{{ route('admin.enquiry.course_enquiry') }}';" type="button">
              <div class="row align-items-center">
                <div class="col-md-8">
                  <span class="new-user mb-3 title">Course Enquiries</span>
                  <h4 class="mt-0" style="margin-bottom: 0px;"> <span class="counter"
                      data-final-value="{{ $TotalCourseEnquiries }}">0</span> </h4>

                      <!-- <small>In Last Week</small> -->
                </div>
                <div class="col-md-4 border2">
                  <div class="dashcardImg">
                    <img src="{{ asset('admin') }}/assets/images/course-enquiry.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="card card-h-100 dashboardCard">
            <div class="card-body" onclick="location.href = '{{ route('admin.enquiry.generaenquiry') }}';" type="button">
              <div class="row align-items-center">
                <div class="col-md-8">
              
                <span class="new-user mb-3 title">General Enquiries</span>
                <h4 class="mt-0" style="margin-bottom: 0px;"> <span class="counter"
                    data-final-value="{{ $genralenquiry }}">0</span> </h4>
              

                      <!-- <small>In Last 10 Days</small> -->
                </div>
                <div class="col-md-4 border2">
                  <div class="dashcardImg">
                    <img src="{{ asset('admin') }}/assets/images/general-enquiry.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="card card-h-100 dashboardCard">
            <div class="card-body" onclick="location.href = '{{ route('admin.enquiry.contactusenquiry') }}';" type="button">
              <div class="row align-items-center">
                <div class="col-md-8">
              
                  <span class="new-user mb-3 title">Contact Enquiries</span>
                  <h4 class="mt-0" style="margin-bottom: 0px;"> <span class="counter" data-final-value="{{ $TotalContactEnquiries }}">0</span>
                  </h4>
                

                  <!-- <small>In Last Month</small> -->
                </div>
                <div class="col-md-4 border2">
                  <div class="dashcardImg">
                    <img src="{{ asset('admin') }}/assets/images/query-icon.png" alt="img" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- end row-->
        <!-- end row-->
        <!-- <button class="nav-link active" onclick="location.href = 'air-terminals.html';" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Air
          Terminals</button> -->

  
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
   
  <!-- end main content-->
</div>
@endsection