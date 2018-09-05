@extends('layouts.base')
@section('content')

    <div id="all">

        <div id="content">
            <div class="container">

               

                <!-- *** LEFT COLUMN ***
		     _________________________________________________________ -->
             <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Welcome</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="/about">About us</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    
                </div>
		 

                <div class="col-sm-9" id="blog-listing">

                    <!--<ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>-->


                    <div class="box">

                        <h1>Trainings</h1>
                        <p>Join Handicrafts training <strong>Today!</strong> There are many to choose from!</p>

                    </div>

                    <div class="post">
                        <h2><a href="/onetraining"> Thanka Training</a></h2>
                        
                        <hr>
                        <p class="date-comments">
                            <a href="/onetraining"><i class="fa fa-calendar-o"></i> June 20, 2018</a>
                            
                        </p>
                        <div class="image">
                            <a href="/onetraining">
                                <img src="img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">This is a special training Course that enables a student to start giving workshops, slide shows and lectures in the field of Thanka Painting. Students interested in the yearlong program are expected to dedicate themselves to the intense training process.</p>
                        <p class="read-more"><a href="/onetraining" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>
		@foreach($trainings as $training)	
		   <div class="post">
		
                        <h2><a href='{{ route('training.show',array($training->id)) }}'>{{$training->title}}</a></h2>
                        <hr>
                        <p class="date-comments">
                            <a href="/onetraining"><i class="fa fa-calendar-o"></i> {{$training->venue}}</a>
                        </p>
                        <!--<div class="image">
                            <a href="/onetraining">
                                <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>-->
                        
                        <p class="intro">{{$training->introduction}}</p>
                        <p class="read-more"><a href='{{ route('training.show',array($training->id)) }}'>Continue reading</a>
                        </p>
		
                    </div>
		@endforeach

                    <div class="post">
                        <h2><a href="/onetraining">Stone Carving</a></h2>
                        <hr>
                        <p class="date-comments">
                            <a href="/onetraining"><i class="fa fa-calendar-o"></i> June 20, 2018</a>
                        </p>
                        <div class="image">
                            <a href="/onetraining">
                                <img src="/img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Students receiving training in the Nepal Traditional Handicraft Center will be taught by eight of the nation's finest master artisans in traditional drawing, thanka painting, repousse metal carving, clay sculpture, stone carving and wooden craftsmanship. Classes will be offered in both a full two year format or 2-3 month format.</p>
                        <p class="read-more"><a href="/onetraining" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>

                    <!--<ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next disabled"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>-->



                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


                


            </div>
            <!-- /.container -->
        </div>
       @endsection
