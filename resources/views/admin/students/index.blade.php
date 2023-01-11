@include('admin.header');


<!-- End Header -->

  <!-- ======= Sidebar ======= -->

@include('admin.sidebar');
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>

     

    </div><!-- End Page Title -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View student record 
              </h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student name </th>
                    <th scope="col">student age </th>
                    <th scope="col">student address </th>
                    <th scope="col">student course  </th>
                               
                  </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)   
                <tr>
                <td>{{ ++$i }}</td>
                    <td>{{$student->std_name }}</td>
                    <td>{{$student->std_age }}</td>
                    <td>{{$student->std_adress }}</td>
                    <td>{{$student->std_course }}</td>
                   

                    <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('admin.footer');