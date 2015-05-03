@extends('layouts/master')

@section('content')
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">Your Hatch Reports</div>
            <div class="panel-body">
                @foreach($hatchReports as $hatchReport)
                    <li>{{$hatchReport->title}}</li>
                @endforeach
            </div>
        </div>
    </div>
@endsection