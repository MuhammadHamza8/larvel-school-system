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
              <h5 class="card-title"> Update Record </h5>

              <!-- General Form Elements -->
              <form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Teacher Name </label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value='{{$teacher->name}}'  class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Teacher class  </label>
                  <div class="col-sm-10">
                    <input type="text" name="teacher_class" value='{{$teacher->teacher_class}}'  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">gender
                  </label>
                  <div class="col-sm-10">
                    <input type="text" name="gender"  value='{{$teacher->gender}}'  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Teacher age </label>
                  <div class="col-sm-10">
                    <input type="text" name="age"  value ='{{$teacher->age }}'  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Teacher address  </label>
                  <div class="col-sm-10">
                    <input type="text" name="address"  value ='{{$teacher->address}}'  class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Teacher salary  </label>
                  <div class="col-sm-10">
                    <input type="text" name="salary"  value ='{{$teacher->salary}}'  class="form-control">
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