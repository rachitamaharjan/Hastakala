@extends('layouts.adminbase')



@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>Add New Artist</strong>
      </h1>

      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
       
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Artist Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                 <div class="box-header with-border">
              		<h3 class="box-title"><b>Artist photographs</b></h3>
            	 </div>

              

                <div class="form-group">
                  <label for="exampleInputFile">Upload Profile Picture</label>
                  <input type="file" id="exampleInputFile">

                  
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload Cover Photo</label>
                  <input type="file" id="exampleInputFile">

                  
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
                  <label for="exampleInputEmail1">Name</label>
                  <input type="form-control" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="form-control" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="form-control" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                </div>

                
              
               


                <div class="form-group">
                  <label>Artist Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>

                


                

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Social Media Link</label>
                  <input type="form-control" class="form-control" id="exampleInputEmail1" placeholder="Enter link">
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




@endsection