@extends('layouts.baseuser')


@section('content') 
	
<div id="all">
	<div id="content">
		
      
	<div id="hot">
            
                <div class="container">
		    <div class="col-sm-3">
		        <div class="box">
		        	<!--<h1 class="text-center">Hand Knitted Infinity Scarf</h1>
		        	<p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
		        	</p>                
		        	<p class="price">Rs.450</p>-->
		            <!--upload products-->
		            <p class="text-center buttons">
		                    <a href="/product/create" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Products</a>
		            </p>
			   <p class="text-center buttons">
		                    <a href="/artist/create" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
		            </p>
		            <!--edit products-->
		                                                                       
		        </div>
		    </div>           
            	</div>
	<div class="box">
		<div class="container">
                    <div class="col-md-12">
                        <h2>My Products</h2>
                    </div>
                </div>
            
	</div>

            <div class="container">
                <div class="product-slider">
		@foreach($products as $product)
                    <div class="item">
                        <div class="product">
                           <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href='{{ route('products.show',array($product->id)) }}'>
                                            <img src="img/product1.jpg" name="image1" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href='{{ route('products.show',array($product->id)) }}'>
                                            <img src="img/product1.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="/product" class="invisible">
                                <img src="img/product1.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="/product">{{$product->name}}</a></h3>
                                <p class="price">{{$product->price}}</p>
                                <p class="text-center buttons">

                                       {!! Html::linkRoute('products.edit','Edit',array($product->id),array('class'=>'btn btn-primary btn-block'))!!}                               
                                        <!--delete products-->
                                         {!! Form::open([
            'method' => 'DELETE',
            'route' => ['products.destroy', $product->id]
        ]) !!}				

	
		{!!Form::submit('Delete',['class'=>'btn btn-destroy btn-block'])!!}
		{!!Form::close()!!}
                                </p>
                            </div>
                                <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
	@endforeach


                    

                </div>
                    <!-- /.product-slider -->
            </div>
                <!-- /.container -->
            <!--delete modal-->
            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="delete">Delete?</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-muted">Are you sure you want to delete?</p>
                            <p class="text-center text-muted">You will not be able to recover this data.</p>
                            <form action="delete.html" method="post">
                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-check"></i> Yes</button>
                                    <button class="btn btn-primary"><i class="fa fa-times"></i> No</button>
                                </p>
                            </form>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- /#hot -->
            <!-- *** HOT END *** -->
    </div>
</div>

	
@endsection



      

