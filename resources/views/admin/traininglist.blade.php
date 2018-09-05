@extends('layouts.adminbase')



@section('content')



                

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>New Training</strong>
      </h1>

      
    </section>
<section class="content">

     <div class="row">


        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">

            <div class="box-body box-profile">
            

              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/plus2.jpg" alt="User profile picture">
              
                         
              <a href="/training/create" class="btn btn-primary btn-block"><b>Add</b></a>
</div>
</div>
</div>
</div>

    <!-- Main content -->
    <section class="content">
	<div class="row">
	
      	@foreach($trainings as $training)
	
        <!-- left column -->
       
          <!-- general form elements -->
          <!--for each here-->
          	<div class="box box-primary">
	            
	            <!-- /.box-header -->
	            <!-- form start -->
	            <div class="box-header with-border">
		            <h2> <a href='{{ route('training.show',array($training->id)) }}'> {{$training->title}}</a></h2>	                                                        
	                <hr>
	                <p class="date-comments">
	                    <a href="/onetraining"><i class="fa fa-calendar-o"></i> {{$training->venue}}</a>
	                    
	                </p>
	                <p class="intro">{{$training->introduction}}</p>
	                <p class="read-more"><a href='{{ route('training.show',array($training->id)) }}' class="btn btn-primary">Continue reading</a>
	                </p>
	            </div>
          	</div>

          	<!--till here-->
          @endforeach
          <!-- /.box -->
    	</div>
	
      <!-- /.row -->
    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
</body>
</html>

@endsection
