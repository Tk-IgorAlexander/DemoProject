@extends('book.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Registrar Libro
				</div>
				<div class="panel-body">
					<form action="{{route('storeBook')}}" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Titulo</label>
							<div class="col-md-6">
								<input class="form-control" name="title" placeholder="Titulo del libro" value="{{ old('title') }}"> 
								@if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('author_id') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Autor</label>
							<div class="col-md-6">
								<input class="form-control" name="author_id" placeholder="Ingrese codigo" value="{{ old('author_id') }}">
								@if ($errors->has('author_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author_id') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('publisher_id') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Editorial</label>
							<div class="col-md-6">
								<input class="form-control" name="publisher_id" placeholder="Ingrese codigo" value="{{ old('publisher_id') }}">
								@if ($errors->has('publisher_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('publisher_id') }}</strong>
                                    </span>
                            	@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">País</label>
							<div class="col-md-6">
								<select class="form-control" name="country_id">
									 @foreach ($countries as $country)
									 	<option value="{{ $country->id }}" @if (old('country_id') == $country->id) selected="selected" @endif>
									 	{{$country->name}}</option>
									 @endforeach
								</select>
								@if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Año</label>
							<div class="col-md-6">
								<input class="form-control" name="year" placeholder="xxxx"value="{{ old('year') }}">

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
								<input class="form-control" name="isbn" placeholder="000000000000" value="{{ old('isbn') }}">

                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">Stock</label>
							<div class="col-md-6">
								<input class="form-control" name="stock" placeholder="0" value="{{ old('stock') }}">

                                @if ($errors->has('stock'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('image_path') ? ' has-error' : '' }}">
							<label class="col-md-4 control-label">URL de portada</label>
							<div class="col-md-6">
								<input class="form-control" name="image_path" placeholder=".jpg, .png, etc" value="{{ old('image_path') }}">

                                @if ($errors->has('image_path'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Descripcion</label>
							<div class="col-md-6">
								<textarea class="form-control" name="desc" rows="3" placeholder="Agregue la descripcion del libro aquí..."></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection