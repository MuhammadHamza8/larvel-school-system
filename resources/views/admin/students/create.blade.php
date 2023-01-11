@include('admin.header');


<!-- End Header -->

  <!-- ======= Sidebar ======= -->

  @include('admin.sidebar');
 
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Course  Form </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-md-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Add Student   Record </h5>

              <!-- General Form Elements -->
              <form action="{{ route('students.store') }}" method="POST">
               @csrf
      <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">student name</label>
                  <div class="col-sm-10">
                    <input type="text" name="std_name"  class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">student age  </label>
                  <div class="col-sm-10">
                    <input type="text" name="std_age"  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">student adress  </label>
                  <div class="col-sm-10">
                    <input type="text" name="std_adress"  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">student course  </label>
                  <div class="col-sm-10">
                    <input type="text" name="std_course"  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  
                  <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('admin.footer');