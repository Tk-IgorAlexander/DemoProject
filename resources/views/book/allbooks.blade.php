@extends('book.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Libros
				</div>
				<div class="panel-body">
					
						<table class="table table-striped task-table">
							<thread>
								<th>ID</th>
								<th>Titulo</th>
								<th>Autor</th>
								<th>Año</th>
								<th>&nbsp;</th>
							</thread>
							<tbody>
								@foreach ($books as $book)
									<tr>
										
										<td>{{$book->id}}</td>
										<td>{{$book->title}}</td>
										<td>{{$book->author->last_name.', '.$book->author->first_name}}</td>
										<td>{{$book->year}}</td>
										<td>
											<form action="/admin/books/{{$book->id}}" method="GET">
												{{ csrf_field() }}
												<button type="submit" class="btn btn-default btn-xs">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												</button>
											</form>
										</td>
										
									</tr>
								@endforeach
							</tbody>
						</table>
						<div class="col-md-offset-10">
							<form action="/admin/books/addBook" method="GET">
								{{ csrf_field() }}
								<div class="form-group">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-btn fa-plus"></i>Agregar Libro
									</button>
								</div>
							</form>
						</div>					
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection