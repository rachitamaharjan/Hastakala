@extends('layouts.adminbase')



@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header">
      <h1>Add new product</h1>
      
    </section>



    <section class="content">

     <div class="row">


        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">

            <div class="box-body box-profile">
            

              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/plus2.jpg" alt="User profile picture">
              
                         
              <a href="/admin/product/featured/add" class="btn btn-primary btn-block"><b>Add</b></a>
                
            
            <!-- /.box-body -->
          </div>
        
      </div>

    </section>




    <section class="content-header">

      <h2>Approve and Delete</h2>
      
    </section>

    <section class="content-header">
      <h1>Featured Products</h1>
    </section>

    <section>
	
      <div class="content">
@foreach($products as $product)
        <div class="col-md-3">

          <!-- Profile Image -->
	
          <div class="box box-primary">

            <div class="box-body box-profile">
             <a href='{{ route('featuredproduct.show',array($product->id)) }}'>

              <img class="profile-user-img img-responsive img-circle" name="image1" src="../../dist/img/hemp.jpeg" alt="User profile picture">
              <h3 class="profile-username text-center">{{$product->name}}</h3>
		<p class="text-muted text-center">{{$product->description}}</p>
		{!! Html::linkRoute('featuredproduct.edit','Edit',array($product->id),array('class'=>'btn btn-primary btn-block'))!!}
		{!!Form::close()!!}

              
              

              
            </a>
  
            </div>
            <!-- /.box-body -->
          </div>

          
          </div>
        @endforeach
      </div>
	
    </section>





  <!-- /.content-wrapper -->
<footer class="main-footer">

    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>

    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.

</footer>




  <!-- Control Sidebar -->
  
<div class="control-sidebar-bg"></div>


</div>
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
