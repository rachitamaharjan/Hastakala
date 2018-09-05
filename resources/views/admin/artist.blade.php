@extends('layouts.adminbase')



@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->



    <section class="content-header">

      <h2>Edit and Delete</h2>
      
    </section>

    





    <!-- Main content -->
    <section class="content">

 

@foreach($artists as $artist)
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">

            <div class="box-body box-profile">
           <a href='{{ route('adminartist.show',array($artist->id)) }}'>

              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">{{$artist->name}}</h3>

              <p class="text-muted text-center">{{$artist->description}}</p>
              

              <div class="row">
                

                <center><div class="col-sm-12" style="background-color:lavender;"><a href="/admin/delete">Delete</a></div></center>
              </div>

            </a>
  
            </div>
            <!-- /.box-body -->
          </div>

          
          </div>
@endforeach

</section>

</div>






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
