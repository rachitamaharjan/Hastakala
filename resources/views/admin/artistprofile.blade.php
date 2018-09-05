
@extends('layouts.adminbase')



@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>New artist</strong>
      </h1>

      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Artist Detail</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputPassword1">Name of the artist</label>
                  <p>
                    {{$artist->name}}



                  </p>
                  
                  
                </div>
	<div class="col-sm-3"> 
                <div class="form-group">
                  <label for="exampleInputFile">Upload Profile Picture</label>
                  <p>

                  <img  src="../../dist/img/avids1.jpg"  height="60" width="60">
               
                  </p>

                  
                </div>
</div>

<div class="col-sm-3"> 
                <div class="form-group">
                  <label for="exampleInputFile">Upload Cover Picture</label>
                  <p>

                  <img  src="../../dist/img/avids1.jpg"  height="60" width="60">
               
                  </p>

                  
                </div>
</div>




              </div>
              <!-- /.box-body -->

    
            </form>

          
          <!-- /.box -->
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<section class="content">
      <div class="row">
        <!-- left column -->
        
          <!-- general form elements -->
          <div class="box box-primary">



            <form role="form">
              <div class="box-body">

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Link</label>
                  <p>
                    {{$artist->dimension}}


                  </p>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <p>
                     {{$artist->weight}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <p>
                     {{$artist->materialUsed}}



                  </p>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <p>
                    

			{{$artist->description}}


                  </p>
                </div>

<div class="form-group">
                  <label for="exampleInputEmail1">Things I make</label>
                  <p>
                    

			{{$artist->description}}


                  </p>
                </div>

<div class="col-sm-2"> 
		{!! Html::linkRoute('artists.edit','Approve',array($artist->id),array('class'=>'btn btn-primary btn-block'))!!}<br><br>   
	

		 {!! Form::open([
			    'method' => 'DELETE',
			    'route' => ['adminartist.destroy', $artist->id]
			]) !!}
</div>	

<div class="col-sm-2"> 			

	
		{!!Form::submit('Delete',['class'=>'btn btn-destroy btn-block'])!!}
		{!!Form::close()!!}
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
