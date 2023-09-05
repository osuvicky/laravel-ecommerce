@include('admin.layout.header')
        
      @include('admin.layout.sidebar')
      
      @include('admin.layout.navbar')  
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="page-header">
              <h3 class="page-title"> Create Category </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create Category</h4>
                    <p class="card-description"> Input details  below </p>
                    <form action="{{url('/add_category')}}" method="POST" class="forms-sample">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="category" placeholder="Category Name">
                      </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <p class="card-description"> All Categories</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Category Name </th>
                            <th> View </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>                            
                        @foreach($data as $data)
                          <tr class="table-info">
                            <td>  </td>
                            <td> {{$data->category_name}}</td>
                            <td> <a href="{{url('delete_category')}}">View</a> </td>
                            <td> <a href="{{url('delete_category')}}">Edit</a> </td>
                            <td> <a onclick="return confirm('Confirm Delete')"  href="{{url('delete_category',$data->id)}}">Delete</a> </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
         @include('admin.layout.footer')