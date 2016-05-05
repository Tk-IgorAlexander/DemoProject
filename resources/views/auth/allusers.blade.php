@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Usuarios
				</div>
				<div class="panel-body">
					
						<table class="table table-striped task-table">
							<thread>
								<th>ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>&nbsp;</th>
							</thread>
							<tbody>
								@foreach ($users as $user)
									@if ($user->getType() == 1)
									<tr>
										
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>
										{{--
										@if ($user->isApproved() == false)
											<form action="/auth/{{$user->id}}" method="POST">
												{{ csrf_field() }}
												<button type="submit" class="btn btn-primary">
													Aprobar
												</button>
											</form>
										@endif
										--}}
										</td>
										
									</tr>
									@endif
								@endforeach
							</tbody>
						</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection