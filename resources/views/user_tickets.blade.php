@extends('layouts.app')


@section('content')
<br>
<div class="row">
     <div class="col-12">
        <div class="jumbotron text-center">
            <h1>Mes Tickets</h1>
        </div>
                    <table class="table table-bordered table-dark text-center"  id="list_tick">
                        <thead>
		        				<tr>
                                    <th>Id Ticket</th>
                                    <th>Catégorie Incident</th>
                                    <th>Niveau de sévérité</th>
                                    <th>Description</th>
                                    <th>Créé le</th>
		        				</tr>
		        			</thead>
		        			<tbody>
		        			@foreach ($tickets as $ticket)
								<tr>
		        					<td>
                                        {{ $ticket->id_ticket}}
                                    </td>
		        					<td>
                                        {{ $ticket->cat_incident}}
		        					</td>
                                    <td>{{ $ticket->niveau_sev }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>{{ $ticket->created_at }}</td>
		        				</tr>
		        			@endforeach
		        			</tbody>
		        		</table>

		        		{!! $tickets->links() !!}
	        		{{--@endif--}}
	        	</div>
	        </div>
	    </div>
	</div>
@endsection
