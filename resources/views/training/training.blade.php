@extends('layouts.base')
@section('content')
<div id="all">

        <div id="content">
            <div class="container">

                
                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Training</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="blog.html">About us</a>
                                </li>
                                <li class="active">
                                    <a href="blog.html">Fashion</a>
                                </li>
                                <li>
                                    <a href="blog.html">News and gossip</a>
                                </li>
                                <li>
                                    <a href="blog.html">Design</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    
                </div>


                <div class="col-sm-9" id="blog-post">


                    <div class="box">

                        <h1>Thanka Training </h1>
                        <p class="author-date"> June 20, 2018 </p>
                        <p class="lead">This is a special training Course that enables a student to start giving workshops, slide shows and lectures in the field of Thanka Painting. Students interested in the yearlong program are expected to dedicate themselves to the intense training process.</p>

                        <div id="post-content">
                            <!--<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                                fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>-->

                            <p>
                                <img src="img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </p>

                            

                            <h3>About the training</h3>

                            <p>This is a special training Course that enables a student to start giving workshops, slide shows and lectures in the field of Thanka Painting. Students interested in the yearlong program are expected to dedicate themselves to the intense training process.</p>                          
                           
                            <h3>Who are the trainers?</h3>
                            <p>
                            Dushreena Dhakya, Daman Datna Duttacharya
                            </p>

                            <h2>Contact info</h2>

                            <blockquote>
                                <p>9813234353</p>
                            </blockquote>

                            <h2>Venue and Time</h2>

                            <blockquote>
                                <p>
                                    Balkumari complex, June 28th
                                </p>
                            </blockquote>
                        </div>
                        

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /#blog-post -->

                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection
