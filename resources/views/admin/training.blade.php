@extends('layouts.adminbase')



@section('content')

 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>Host a Training session</strong>
      </h1>

      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Session Detail</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('training.store') }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="form-control" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter title">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Introduction</label>
                  <input type="form-control" class="form-control" name="introduction" id="exampleInputPassword1" placeholder="Enter Introduction">
                </div>

		 <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile"> 
                </div>

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact info</label>
                  <input type="form-control" class="form-control" name="contact" id="exampleInputEmail1" placeholder="Enter Contact Info">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Trainer</label>
                  <input type="form-control" class="form-control" name="trainer" id="exampleInputEmail1" placeholder="Who is the trainer?">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Venue and Time</label>
                  <input type="form-control" class="form-control" name="venue" id="exampleInputEmail1" placeholder="Enter Venue and Time">
                </div>

                <div class="form-group">
                  <label>Categories</label>
                  <input type="form-control" class="form-control" name="category" id="exampleInputEmail1" placeholder="Enter Categories">
                </div>

                

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary"><strong>Add</strong></button>
              </div>



               </div>
             </form>




          </div>
        
       </div>
</section>



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
