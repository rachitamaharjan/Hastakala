
@extends('layouts.adminbase')



@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>New Product</strong>
      </h1>

      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Product Detail</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Artist Name</label>
                  <p>
                    



                  </p>
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Name of the Product</label>
                  <p>
                    {{$product->name}}



                  </p>
                  
                  
                </div>
	<div class="col-sm-3"> 
                <div class="form-group">
                  <label for="exampleInputFile">Upload image</label>
                  <p>

                  <img  src="../../dist/img/avids1.jpg"  height="60" width="60">
               
                  </p>

                  
                </div>
</div>
<div class="col-sm-3"> 
		<div class="form-group">
                  <label for="exampleInputFile">Upload image</label>
                  <p>

                  <img  src="../../dist/img/avids1.jpg"  height="60" width="60">
               
                  </p>

                  
                </div>
</div>

<div class="col-sm-3"> 
		<div class="form-group">
                  <label for="exampleInputFile">Upload image</label>
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
                  <label for="exampleInputEmail1">Dimension</label>
                  <p>
                    {{$product->dimension}}


                  </p>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Weight</label>
                  <p>
                     {{$product->weight}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Material Used</label>
                  <p>
                     {{$product->materialUsed}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <p>
                    {{$product->price}}



                  </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <p>
                    

			{{$product->description}}


                  </p>
                </div>

<div class="col-sm-2"> 
		{!! Html::linkRoute('approve.index','Approve',array($product->id),array('class'=>'btn btn-primary btn-block'))!!}<br><br>   
	

		  {!! Form::open([
            'method' => 'DELETE',
            'route' => ['adminproduct.destroy', $product->id]
        ]) !!}				

	
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
