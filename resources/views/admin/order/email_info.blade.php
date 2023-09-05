@include('admin.layout.header')
        
      @include('admin.layout.sidebar')
      
      @include('admin.layout.navbar') 
      <style type="text/css">
        .form-control
        {
          text-color:red;
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
              <h3 class="page-title"> Send Email </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Send Email</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Send Email</h4>
                    <form action="{{url('send_user_email',$order->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                      <p class="card-description"> Input details below </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Greeting </label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="greeting"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email First Line</label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="firstline"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Body</label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="body"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Button Name</label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="button"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Url</label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="url"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email Last Line</label>
                            <div class="col-sm-9">
                              <input type="text" style="background-color: white;" class="form-control" name="lastline"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary me-2">Send Email</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
         @include('admin.layout.footer')