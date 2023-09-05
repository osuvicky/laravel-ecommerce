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
              <h3 class="page-title"> View Orders </h3>
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
                    <!-- <h4 class="card-title">Products</h4>
                    <p class="card-description"> All Products</code>
                    </p> -->
                    <form action="{{url('search')}}" method="GET">
                    <div class="col-md-6">
                          <div class="form-group row">
                            <div class="col-sm-9">
                              <input type="text" style="color: white;" class="form-control" name="search" placeholder="search for something"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-9">
                              <input type="submit" class="btn btn-primary me-2" value="Search"/>
                            </div>
                          </div>
                    </div>
                    </form>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Product Title </th>
                            <th> Qty </th>
                            <th> Price </th>
                            <th> Payment Status </th>
                            <th> Image </th>
                            <th> Delivery Status </th>
                            <th> Delivered </th>
                            <th> Print PDF </th>
                            <th> Send Email </th>
                          </tr>
                        </thead>
                        <tbody>                            
                        @forelse($order as $data)
                          <tr class="table-info">
                            <td>  </td>
                            <td> {{$data->name}}</td>
                            <td> {{$data->email}}</td>
                            <td> {{$data->address}}</td>
                            <td> {{$data->phone}}</td>
                            <td> {{$data->product_title}}</td>
                            <td> {{$data->quantity}}</td>
                            <td> {{$data->price}}</td>
                            <td> {{$data->payment_status}}</td>
                            <td> <img class="img_size" src="/product/{{$data->image}}"></td>
                            <td> {{$data->delivery_status}}</td>
                            <td>
                                @if($data->delivery_status=='processing') 
                                <a href="{{url('delivered',$data->id)}}" onclick="return confirm('Are you sure this product is delivered?')">Delivered</a>
                                @else
                                <p style="color:green;" class="preview-subject ellipsis mb-1 text-small">Delivered</p>
                                @endif
                            </td>
                            <td> <a href="{{url('print_pdf',$data->id)}}">Download</a></td>
                            <td> <a href="{{url('send_email',$data->id)}}">Email</a></td>
                          </tr>
                          @empty
                          <tr>
                            <td colspan="16">No Data Found  </td>
                          </tr>   
                          @endforelse
                          
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