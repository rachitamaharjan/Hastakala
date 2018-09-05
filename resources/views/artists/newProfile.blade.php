@extends('layouts.commonbaseuser')

@section('contents')
<div class="col-md-9">
                    <div class="box">
                        <h1>My account</h1>
                        <p class="lead">Add your personal details here.</p>
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
                        <form action="{{ route('artists.store') }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name">
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
                                        <input type="file" name="profilepic" id="profilePhoto">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Cover Photo</label>
                                        <input type="file" name="coverpic" id="coverPhoto">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                            </div>

                            <!-- /.row -->

                            <!--<div class="row">
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
                                        <textarea class="form-control" name="description" id="bio"></textarea>
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
                                        <input type="text" class="form-control" name="link" id="link"></input>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- /.row -->

                           
                            <!--/.row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="products">Things You Make</label>
                                        <textarea class="form-control" name="thingsimake" id="products"></textarea>
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
