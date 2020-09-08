@extends('crudbooster::admin_template')

@push('head')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endpush


@section('content')
{{-- 	Dasbor Page!!! {{ CRUDBooster::myName()  }}
	<br>Kalender Acara --}}

	<div class="box">
	  <div class="box-header">
	    <h3 class="box-title">Kalender Kegiatan</h3>
	  </div>
	  <div class="box-body">
	    <div id='calendar'></div>
	  </div>
	</div>

	
@endsection


{{-- @push('bottom')
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
	<script>
	    $(document).ready(function() {
	        // page is now ready, initialize the calendar...
	        $('#calendar').fullCalendar({
	            // put your options and callbacks here
	            events : [
	                @foreach($workshops as $task)
	                {
	                    title : '{{ $task->tema }}',
	                    start : '{{ $task->tanggal_pelaksanaan }}',
	                    url : '{{ CRUDBooster::adminPath('workshop/detail/'.$task->id) }}'
	                },
	                @endforeach
	            ]
	        })
	    });
	</script>
@endpush --}}