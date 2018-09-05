@extends('layouts.baseuser')


@section('content') 
	<!--banner-->
	<style>
		.banner {
 			 background:url(/img/a.jpg)no-repeat center 0px;
 		}
 		/*.banner-info{
		  background: url(../img/dott.png)repeat 0px 0px;
		  padding: 4em 0;
		}*/
	</style>
<div id="all">
	<div id="content">
		<div id="home" class="banner">
			<div class="banner-info">
				<div class="container">
					<div class="col-md-4 header-left">
						<p class="text-center">
                            <img src="img/img1.jpg" class="img-circle img-responsive" alt="">
                        </p>
					</div>
					<div class="col-md-8 header-right">
						<h1>I'm {{$artist->name}}</h1>
						<ul class="address">
							<li>
								<ul class="address-text">
									<li><b>PHONE </b></li>
									<li>{{$artist->phone}}</li>
								</ul>
							</li>
							<!--<li>
								<ul class="address-text">
									<li><b>ADDRESS </b></li>
									<li>756 global Place, North Sydney, Canada.</li>
								</ul>
							</li>-->
							<li>
								<ul class="address-text">
									<li><b>E-MAIL </b></li>
									<li><a href="mailto:example@mail.com">{{$artist->email}}</a></li>
								</ul>
							</li>
							</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!--//banner-->
	
	<!--about-->
		<div id="hot">
			<div class="box">
            	<div class="container">
              	  <div class="col-md-12">
            	        <h2>About Me</h2>
			
              	  </div>
            	</div>
        	</div>
   		</div>
		<div class="container">
			<div class="col-md-9">
				<div class="box" id="details">
			<p>{{$artist->description}}</p>
                        <p>
                            <h4>Things I make</h4>
                            <p> {{$artist->thingsimake}}</p>
			<h4>Links:</h4>
                            <p> {{$artist->link}}</p>
       
<br> 

                            <hr>
                            
                		
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="box">
                	
			{!! Html::linkRoute('artists.edit','Edit',array($artist->id),array('class'=>'btn btn-primary btn-block'))!!}                               
                                        
<br>
<!--delete products-->

                                        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['artists.destroy', $artist->id]
        ]) !!}					{!!Form::submit('Delete',['class'=>'btn btn-destroy btn-block'])!!}                                                         
                </div>           
            </div>
		</div>
	<!--//about-->
		
	 <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
       

            <!-- /#hot -->

            <!-- *** HOT END *** -->
            </div>
</div>

	
@endsection



      

