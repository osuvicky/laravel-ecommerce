@include('admin.layout.header')
        
      @include('admin.layout.sidebar')
      
      @include('admin.layout.navbar')  
      <style type="text/css">
        .img_size
        {
          width: 150px;
          height: 150px;
        }
      </style> 
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
              <h3 class="page-title"> View Products </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Products</h4>
                    <p class="card-description"> All Products</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Product Title </th>
                            <th> Image </th>
                            <th> Category </th>
                            <th> Price </th>
                            <th> Qty </th>
                            <th> Discount </th>
                            <th> Date </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>                            
                        @foreach($product as $data)
                          <tr class="table-info">
                            <td>  </td>
                            <td> {{$data->title}}</td>
                            <td> <img class="img_size" src="/product/{{$data->image}}"></td>
                            <td> {{$data->category}}</td>
                            <td> {{$data->price}}</td>
                            <td> {{$data->quantity}}</td>
                            <td> {{$data->discount_price}}</td>
                            <td> {{$data->created_at}}</td>
                            <td> <a href="{{url('update_product',$data->id)}}">Edit</a> </td>
                            <td> <a onclick="return confirm('Confirm Delete')"  href="{{url('delete_product',$data->id)}}">Delete</a> </td>
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