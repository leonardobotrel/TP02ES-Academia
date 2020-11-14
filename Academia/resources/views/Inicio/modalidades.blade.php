@extends('layouts.app', ['pageSlug' => 'home'])
@section('title','Profile')


@section('content_header')

@endsection


@section('content')
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush