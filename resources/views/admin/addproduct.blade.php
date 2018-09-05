
@extends('layouts.adminbase')



@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>Add New Product</strong>
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
            <form action="{{ route('featuredproduct.store') }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Artist Email</label>
                  <input type="email" class="form-control"  id="exampleInputEmail1" placeholder="Enter Artist Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Name of the Product</label>
                  <input type="form-control" class="form-control" name="name" id="exampleInputPassword1" placeholder="Name of the Product">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Photo1</label>
                  <input type="file" name="image1" id="exampleInputFile" multiple> 
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Photo1</label>
                  <input type="file" id="exampleInputFile"> 
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Photo1</label>
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

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Dimension</label>
                  <input type="form-control" class="form-control" name="dimension" id="exampleInputEmail1" placeholder=""></input>
                </div>

                

                <div class="form-group">
                  <label for="exampleInputEmail1">Weight</label>
                  <input type="form-control" class="form-control" name="weight" id="exampleInputEmail1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Material Used</label>
                  <textarea class="form-control" rows="3" placeholder="" name="materialUsed"></textarea>
                </div>

                

                

                

                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder=""></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="form-control" class="form-control" name="price" id="exampleInputEmail1" placeholder="">
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary"><strong>Add</strong></button>
              </div>

		</form>

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
