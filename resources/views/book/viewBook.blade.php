@extends('book.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Libro
				</div>
				<div class="panel-body">
					<div class="form-horizontal">
					  <fieldset disabled>	
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Titulo</label>
							<div class="col-md-6">
								<input class="form-control" name="title" placeholder="Titulo del libro" value="{{$book->title}}"> 
								@if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Autor</label>
							<div class="col-md-6">
								<input class="form-control" placeholder="Ingrese codigo" value="{{$book->author->first_name.' '.$book->author->last_name}}">
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Editorial</label>
							<div class="col-md-6">
								<input class="form-control" name="publisher_id" placeholder="Ingrese codigo" value="{{ $book->publisher->name }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">País</label>
							<div class="col-md-6">
								<input class="form-control" name="country_id" value="{{ $book->country->name }}">
								
							</div>
						</div>
						<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Año</label>
							<div class="col-md-6">
								<input class="form-control" name="year" placeholder="xxxx"value="{{ $book->year }}">

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">ISBN (max. 13 car.)</label>
							<div class="col-md-6">
								<input class="form-control" name="isbn" placeholder="000000000000" value="{{ $book->isbn }}">

                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Descripcion</label>
							<div class="col-md-6">
								<textarea class="form-control" name="desc" rows="3" value="{{ $book->desc }}"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								 <img src="{{$book->image_path}}" class="img-thumbnail" alt="Cover book" width="200" height="400">
							</div>
						</div>
						
					  </fieldset>
					  <form action="{{route('checkAvailability', $book->id)}}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
					  	<div class="form-group">
							<label class="col-md-4 control-label">Disponibilidad</label>
							<div class="col-md-6">
								<div class='input-group date' id='datetimepicker1'>
				                    <input type='text' name="doi" class="form-control" value="{{ old('doi') }}"/>
				                    <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
			                    	</span>
			              		</div>
							</div>
							<script type="text/javascript">
					            (function () {
					                $('#datetimepicker1').datetimepicker({
					                	format: 'YYYY/MM/DD'
					                });
					            })(jQuery);
					        </script>
						</div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-default">
									Ver Disponibilidad				
								</button>
							</div>
						</div>
					</form>
					@if ($date_selected)
						@if ($date_stock == 0)

						<div class="form-group">
							<label class="col-md-4 control-label">Estado</label>
							<div class="col-md-6">
								<h3><span class="label label-danger">Agotado</span></h3>
							</div>
						</div>

						@else

						<div class="form-group">
							<label class="col-md-4 control-label">Estado</label>
							<div class="col-md-6">
								<h3><span class="label label-success">Disponible</span></h3>
								<span class="help-block">
                                    <strong>Hay {{ $date_stock }}</strong>
                                </span>						
							</div>

						</div>
						
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Reservar
								</button>
							</div>
						</div>
						@endif
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection