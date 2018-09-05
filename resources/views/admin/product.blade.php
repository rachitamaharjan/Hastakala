@extends('layouts.adminbase')



@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header">
    

      <h1>General Products</h1>
    </section>



    <!-- Main content -->
<section class="content">
@foreach($products as $product)
    

     


        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">

            <div class="box-body box-profile">
           <a href='{{ route('adminproduct.show',array($product->id)) }}'>

              <img class="profile-user-img img-responsive img-circle" src="../../img/product1.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">{{$product->name}}</h3>

              <p class="text-muted text-center">{{$product->description}}</p>
              


            </a>
  
            </div>
            <!-- /.box-body -->
      

          </div> 
          </div>

@endforeach
</section>








  <!-- /.content-wrapper -->




  <!-- Control Sidebar -->
  



<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>

@endsection
