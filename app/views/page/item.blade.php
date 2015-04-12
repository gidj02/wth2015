@extends('layout.user_master')

@section('contents')
	<div class="panel panel-primary">
		<div class="panel-heading"><h1> Itinerary Item Form </h1></div>
			<div class="panel-body">
				<!-- Wala pang createItinerary sa Controller -->
				{{ Form::open(['route' => 'itinerary.store']) }}
			<div class="row">
		        <div class="col-lg-12 col-sm-6 col-md-6">
		            <div class="well well-sm">
		                <div class="row">
		                	<!-- Image for Itinerary -->
		                    <div class="col-sm-6 col-md-4">
		                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
		                    </div>
		                    <!-- End Image for Itinerary -->
		                    <div class="col-sm-6 col-md-8">
		                        <!-- Text fields  -->
					  			<div class="row">
									<div class="form-group">
						              		{{ Form::text('name', '',  array('placeholder' => 'Name of your adventure' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
											{{ $errors->first('name') }}
						            </div>
					  			</div>
                                <div class="row">
									<div class="form-group">
						              		{{ Form::text('location', '',  array('placeholder' => 'Location of your adventure' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1') ) }}
											{{ $errors->first('location') }}
						            </div>
					  			</div>
					  			<div class="row">
									<div class="form-group">
						              		{{ Form::textarea('description', '',  array('placeholder' => 'Blog' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}
						              		<br>
											{{ $errors->first('description') }}
						            </div>
					  			</div>
								<!-- End of End Items -->
								<!-- End of Iterinary Items -->
					            <br>
					            <!-- Save button -->
					            {{ Form::submit('Save', array('class' => 'btn btn-block btn-warning')) }}
	                            <!-- End of Save button -->
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
@stop