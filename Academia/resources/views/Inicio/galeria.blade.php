@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Profile')


@section('content_header')

@endsection


@section('content')
<style>
	body {
		position: relative;
	}
	body::before {    
		content: "";
		background-image: url("{{ asset('black') }}/img/cROSSfIT.jpg");
		background-size:  unset;
		position: absolute;
		top: 0px;
		right: 0px;
		bottom: 0px;
		left: 0px;
		opacity: 0.1;
	}
</style>
<body>
  
</body>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush