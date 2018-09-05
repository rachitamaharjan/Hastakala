@extends('layouts.adminbase')



@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        <strong>Add New Artist</strong>
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
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Artist user_id</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="34533">
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
                  <label>Artist Description</label>
                  <textarea class="form-control" rows="3" placeholder="slakdfsadf jhjhiu jhg uh uh uh uh uhiuf tf iu hiu "></textarea>
                </div>

                <div class="box-header with-border">
               	<h3 class="box-title"><b>Social Networking Links</b></h3>
               </div> 


                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ek h ihuv u y cb i y yg oj h t y i oj uh">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ek h ihuv u y cb i y yg oj h t y i oj uh">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Pinterest</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ek h ihuv u y cb i y yg oj h t y i oj uh">
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