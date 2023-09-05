
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
              <h3 class="page-title"> Update Product </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Product</h4>
                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                      <p class="card-description"> Input details below </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Title</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="title" value="{{$product->title}}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Descr</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="description" value="{{$product->description}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Price</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Discount Price</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="discount" value="{{$product->discount_price}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="category">
                              <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Qty</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <img height="100" width="100" src="/product/{{$product->image}}">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">
                          <!-- <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span> -->
                        </div>
                      </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
         @include('admin.layout.footer')