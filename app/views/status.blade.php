@extends('layouts.master')

@section('content')
					<ul>
						@foreach( $services as $service )
						@if( $service->issuesConfirmed() )
						<li class="hardError">
							{{ $service->name }}
							<p>
								@foreach( $service->issues()->get() as $issue )
								{{ $issue->title }}
								@endforeach
							</p>
						</li>
						@elseif( $service->issuesUnconfirmed() )
						<li class="softError">
							{{ $service->name }}
							<p>
								@foreach( $service->issues()->get() as $issue )
								{{ $issue->title }}
								@endforeach
							</p>
						</li>
						@else
						<li>
							{{ $service->name }}
						</li>
						@endif
						@endforeach
					
					</ul>
@stop