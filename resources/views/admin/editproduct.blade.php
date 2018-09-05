
@extends('layouts.adminbase')



@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>Edit Product</strong>
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
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
            {!!Form::model($product,['route'=>['featuredproduct.update',$product->id],'method'=>'PUT'])!!}
	{{csrf_field()}}
			{{method_field('PUT')}}
              <div class="box-body">

                <div class="form-group">
                  
		
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Name of the Product</label>
                  {{Form::text('name',null,['class'=>'form-control'])}}<br><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload image</label>
                  <input type="file" id="exampleInputFile">

                  
                </div>

              </div>
              <!-- /.box-body -->

    
           

          
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

            <div class="box-header with-border">
              <h3 class="box-title"><b>Specifications</b></h3>
            </div>


            
              <div class="box-body">
        	<div class="row">
              <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productPrice">Price</label>
					{{Form::text('price',null,['class'=>'form-control'])}}<br><br>
                                        <!--<input type="text" class="form-control" id="productPrice">-->
                                    </div>
                                
                                
		
                <div class="form-group">
                  <label for="exampleInputEmail1">Dimension</label>
                  {{Form::text('dimension',null,['class'=>'form-control'])}}<br><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Color</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Red">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Weight</label>
                  {{Form::text('weight',null,['class'=>'form-control'])}}<br><br>    
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Material Used</label>
                  {{Form::text('materialUsed',null,['class'=>'form-control'])}}<br><br>
                </div>


                <div class="form-group">
                  <label>Description</label>
                  {{Form::textarea('description',null,['class'=>'form-control'])}}<br><br>
                </div>


		<dl class="dl-horizontal">	
				<dt>Created At:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($product->created_at))}}</dd>
			</dl>
			<dl class="dl-horizontal">	
				<dt>Last Updated:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($product->updated_at))}}</dd>
			</dl>

               
		{{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}
             {!!Form::close()!!}

		</div>


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
