@extends('layouts.master')

@section('content')
					<ul>
						@foreach( $servers as $server )
						@if( $server->serviceStatus() == 'ConfirmedIssue' )
						<li class="hardError">
							<a href="/server/view/{{ $server->id }}">{{ $server->name }}</a>
							<p>
								@foreach( $server->services()->get() as $service )
								@if( $service->issuesConfirmed() )
								! {{ $service->name }}
								@endif
								@endforeach
							</p>
						</li>
						@elseif( $server->serviceStatus() == 'UnconfirmedIssue' )
						<li class="softError">
							<a href="/server/view/{{ $server->id }}">{{ $server->name }}</a>
							<p>
								@foreach( $server->services()->get() as $service )
								@if( $service->issuesUnconfirmed() )
								? {{ $service->name }}
								@endif
								@endforeach
							</p>
						</li>
						@else
						<li class="noError">
							<a href="/server/view/{{ $server->id }}">{{ $server->name }}</a>
						</li>
						@endif
						@endforeach
					
					</ul>
					
					<a class="reportLink" href="/report">Report an Issue</a>
@stop