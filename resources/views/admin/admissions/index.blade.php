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
              <h5 class="card-title">View admission record 
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
                @foreach ($admissions as $admission)   
                <tr>
                <td>{{ ++$i }}</td>
                    <td>{{$admission->std_name }}</td>
                    <td>{{$admission->std_age }}</td>
                    <td>{{$admission->std_adress }}</td>
                    <td>{{$admission->std_course }}</td>
                   

                    <td>
                <form action="{{ route('admissions.destroy',$admission->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admissions.show',$admission->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('admissions.edit',$admission->id) }}">Edit</a>
   
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