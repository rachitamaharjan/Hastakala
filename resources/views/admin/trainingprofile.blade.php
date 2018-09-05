
@extends('layouts.adminbase')



@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>New Training</strong>
      </h1>

      
    </section>

    <!-- Main content -->
    

<section class="content">
      <div class="row">
        <!-- left column -->
        
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title"><b>Specifications</b></h3>
            </div>


            <form role="form">
              <div class="box-body">

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <p>
                    {{$training->title}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Introduction</label>
                  <p>
                    {{$training->introduction}}

                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Categories</label>
                  <p>
                  {{$training->category}}


                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <p>

                  <img  src="../../dist/img/avids1.jpg"  height="60" width="60">
               
                  </p>

                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Trainer</label>
                  <p>
                    {{$training->trainer}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Contact Info</label>
                  <p>
               		{{$training->contact}}


                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Venue and Time</label>
                  <p>
                  {{$training->venue}}

                  </p>
                </div>

                

                <div class="form-group">
                  <label>Description</label>
                  <p>
                    {{$training->Description}}



                </p>
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
