@extends('layouts.commonbaseuser')

@section('contents')
                <div class="col-md-9">
                    <div class="box">
                        <h1>New Product</h1>
                        <p class="lead">Enter details of  new product.</p>
                        <!--<h3>Change password</h3>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Old password</label>
                                        <input type="password" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">New password</label>
                                        <input type="password" class="form-control" id="password_1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retype new password</label>
                                        <input type="password" class="form-control" id="password_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                 <!--           <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                            </div>
                        </form>

                        <hr>-->

                        <h3>Product details</h3>
                        <form action="{{ route('products.store') }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<!--{!! Form::open(array('route'=>'posts.store'))!!}-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="firstname">
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
                                        <input type="file" name="photo1" id="productPhoto1">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone">Photo2</label>
                                        <input type="file" name="photo2" id="productPhoto2">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone">Photo3</label>
                                        <input type="file" name="photo3" id="productPhoto3">
                                    </div>
                                </div>
                            </div>


                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
					<label for="description">Description</label>
                                         <textarea class="form-control" name="description"  id="description"></textarea>
                                    
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
                                       <input type="text" class="form-control" name="materialUsed" id="material"><br>
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
                                        <input type="text" class="form-control" name="dimension" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Weight</label>
                                       <input type="text" class="form-control" name="weight" id="lastname">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="productPrice">Price</label>
                                        <input type="text" class="form-control" name="price" id="productPrice">
                                    </div>
                                </div>
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>-->
                            </div>

                            <!--/.row -->
                          
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
