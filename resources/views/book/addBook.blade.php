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
					<form action="/admin/books/addBook" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<div class="form-group">
							<label class="col-md-4 control-label">Titulo</label>
							<div class="col-md-6">
								<input class="form-control" name="title" placeholder="Titulo del libro">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Autor</label>
							<div class="col-md-6">
								<input class="form-control" name="author_id" placeholder="Ingrese codigo">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Editorial</label>
							<div class="col-md-6">
								<input class="form-control" name="publisher_id" placeholder="Ingrese codigo">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">País</label>
							<div class="col-md-6">
								<select class="form-control" name="country_id">
									 @foreach ($countries as $country)
									 	<option value="{{ $country->id }}">{{ $country->name}}</option>
									 @endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Año</label>
							<div class="col-md-6">
								<input class="form-control" name="year" placeholder="xxxx">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">ISBN (max. 13 car.)</label>
							<div class="col-md-6">
								<input class="form-control" name="isbn" placeholder="000000000000">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Stock</label>
							<div class="col-md-6">
								<input class="form-control" name="stock" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">URL de portada</label>
							<div class="col-md-6">
								<input class="form-control" name="image_path" placeholder=".jpg, .png, etc">
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