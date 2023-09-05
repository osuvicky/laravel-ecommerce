@include('admin.layout.header')
        
      @include('admin.layout.sidebar')
      
      @include('admin.layout.navbar')  
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
         @include('admin.layout.body') 
         </div>
        </div>    
@include('admin.layout.footer')