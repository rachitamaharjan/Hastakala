@extends('layouts.commonbase')


@section('contents') 
			 <div class="col-md-9">
                    <div class="box">
                        <h1>Products</h1>
                        <p>We offer wide selection of the best products we have found and carefully selected.</p>
                    </div>

                    
                    <div class="row products">
			@foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href='{{ route('products.show',array($product->id)) }}'>
                                                <img src="img/product1.jpg" alt="" class="img-responsive">
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
                                    <p class="price">Rs.{{$product->price}}</p>
                                    <p class="buttons">
                                        <a href='{{ route('products.show',$product->id) }}'>View detail</a>
                                        <!--<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
			@endforeach
			
@endsection
