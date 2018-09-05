@extends('layouts.commonbaseuser')

@section('contents')
<div class="col-md-9">
                    <div class="box">
                        <h1>Edit Product</h1>
                        <p class="lead">Change details of product.</p>
                       <center>
      	<div class="col-md-8">
	
		
		<!--{{Form::text('image1',null,['class'=>'form-control'])}}<br><br>
		{{Form::text('image2',null,['class'=>'form-control'])}}<br><br>
		{{Form::text('image3',null,['class'=>'form-control'])}}<br><br>-->
		
		
		
		
	

		
	</div>
	

                        <hr>-->

                        <h3>Product details</h3>
			{!!Form::model($product,['route'=>['products.update',$product->id],'method'=>'PUT'])!!}
                        <form action="{{route('products.update',$product->id)}}" enctype="multipart/form-data"  method="POST">
			{{csrf_field()}}
			{{method_field('PUT')}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="firstname">Name</label>
					{{Form::text('name',null,['class'=>'form-control'])}}<br><br>
                                       <!-- <input type="text" name= "name" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>-->
                            </div>

                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Photo1</label>
                                        <input type="file" name="productPhoto1" id="productPhoto1">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone">Photo2</label>
                                        <input type="file" name="productPhoto2" id="productPhoto2">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone">Photo3</label>
                                        <input type="file" name="productPhoto3" id="productPhoto3">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productPrice">Price</label>
					{{Form::text('price',null,['class'=>'form-control'])}}<br><br>
                                        <!--<input type="text" class="form-control" id="productPrice">-->
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>-->
                            </div>

                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
					{{Form::textarea('description',null,['class'=>'form-control'])}}<br><br>
                                        <!--<textarea class="form-control" id="description"></textarea>-->
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>-->
                            </div>

                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="company">Materials used</label><br>
					{{Form::text('materialUsed',null,['class'=>'form-control'])}}<br><br>
                                        <!--<input type="text" class="form-control" name="materialUsed" id="material"><br>-->
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="street">Phone Number</label>
                                        <input type="text" class="form-control" id="street">
                                    </div>
                                </div>-->
                            </div><br>
                            <!--/.row -->
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Dimensions</label>
					{{Form::text('dimension',null,['class'=>'form-control'])}}<br><br>
                                        <!--<input type="text" class="form-control" id="lastname">-->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Weight</label>
					{{Form::text('weight',null,['class'=>'form-control'])}}<br><br>                                        
					<!--<input type="text" class="form-control" id="lastname">-->
                                    </div>
                                </div>
                            </div>
			<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">	
				<dt>Created At:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($product->created_at))}}</dd>
			</dl>
			<dl class="dl-horizontal">	
				<dt>Last Updated:</dt>
				<dd>{{date('M j, Y h:ia', strtotime($product->updated_at))}}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
{{Form::submit('save changes',['class'=>'btn btn-success btn-block'])}}

                            <!--/.row -->
                          
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <!--<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>-->
				{!!Form::close()!!}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
