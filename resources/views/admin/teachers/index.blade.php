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
              <h5 class="card-title">View teacher record 
              </h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teacher name </th>
                    <th scope="col"> Teacher class </th>
                    <th scope="col">gender </th>
                    <th scope="col">Teacher Address  </th>
                    <th scope="col">Teacher age </th>
                    <th scope="col">Teacher salary </th>
                               
                  </tr>
                </thead>
                <tbody>
                @foreach ($teachers as $teacher)   
                <tr>
                <td>{{ ++$i }}</td>
                    <td>{{$teacher->name }}</td>
                    <td>{{$teacher->teacher_class }}</td>
                    <td>{{$teacher->gender }}</td>
                    <td>{{$teacher->age }}</td>
                    <td>{{$teacher->address }}</td>
                    <td>{{$teacher->salary }}</td>
                   

                    <td>
                <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
   
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