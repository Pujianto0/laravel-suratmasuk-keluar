@extends('layouts.admin')

@section('content')
<h1>Users Graphs</h1>

<div style="width: 50%">
    {!! $userChart->container() !!}
</div>
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

{!! $usersChart->script() !!}
@endpush