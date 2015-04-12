@extends('layout.user_master')

@section('contents')
	<div class="panel panel-primary">
		<div class="panel-heading"><h1> Itinerary Form </h1></div>
			<div class="panel-body">
				<!-- Wala pang createItinerary sa Controller -->
				{{ Form::open(['route' => 'itinerary.store']) }} 
			<div class="row">
		        <div class="col-xs-12 col-sm-6 col-md-6">
		            <div class="well well-sm">
		                <div class="row">
		                	<!-- Image for Itinerary -->
		                    <div class="col-sm-6 col-md-4">
		                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
		                    </div>
		                    <!-- End Image for Itinerary -->
		                    <div class="col-sm-6 col-md-8">
		                        <!-- Text fields  -->
					  			<div class="form-group">
					                <label class="col-md-4 control-label">Itinerary Name: </label>
					                <div class="col-md-6">
					              		{{ Form::text('itineraryname') }}
					              		<br>
										{{ $errors->first('itineraryname') }}
					                </div>
					            </div>
					            <br>     
					  			<div class="form-group">
					                <label class="col-md-4 control-label">Description: </label>
					                <div class="col-md-6">
					              		{{ Form::textarea('description') }}
					              		<br>
										{{ $errors->first('description') }}
					                </div>
					            </div>
					            <br>     
					  			<div class="form-group">
					                <label class="col-md-4 control-label">Description: </label>
					                <div class="col-md-6">
					              		{{ Form::textarea('description') }}
					              		<br>
										{{ $errors->first('description') }}
					                </div>
					            </div>
					            <br>
								<!-- For Iterinary Items -->
					            <div class="col-lg-3 col-md-4 col-xs-6 thumb" id="itinerarylist">
								    <!-- <a class="thumbnail" href="#">
								        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
								    </a> -->
								</div>
								<!-- Add Items -->
								<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								    <a class="thumbnail" href="#" id="additinerary">
								        <span class="center glyphicon glyphicon-plus"> </span>
								    </a>
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