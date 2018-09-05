@extends('layouts.commonbaseuser')

@section('contents')
<div class="col-md-9">
                    <div class="box">
                        <h1>My account</h1>
                        <p class="lead">Change your personal details here.</p>
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

                        <h3>Personal details</h3>
			 {!!Form::model($artist,['route'=>['artists.update',$artist->id],'method'=>'PUT'])!!}
                        <!--<form action="{{route('artists.update',$artist->id)}}" method="POST" enctype="multipart/form-data">-->
			{{csrf_field()}}
			{{method_field('PUT')}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        {{Form::text('name',null,['class'=>'form-control'])}}<br><br>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Profile Photo</label>
                                        <input type="file" name="profilePhoto" id="profilePhoto">
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        {{Form::text('email',null,['class'=>'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        {{Form::text('phone',null,['class'=>'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <!-- /.row -->

                           <!-- <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address"></input>
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
                                        <label for="bio">Your Bio</label>
                                       {{Form::text('description',null,['class'=>'form-control'])}}
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
                                        <label for="link">Prefered Social media link</label>
                                       {{Form::text('link',null,['class'=>'form-control'])}}
                                    </div>
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Twitter</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Mail</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                            </div>-->
                            <!-- /.row -->

                            
                            <!--/.row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="products">Things You Make</label>
                                        {{Form::text('thingsimake',null,['class'=>'form-control'])}}
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
                            	<br>
                            <div class="row">
                               
                                

                                
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
				
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@endsection
