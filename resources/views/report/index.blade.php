@extends('common.layout')

@section('content')
    @extends('common.header')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @include('report.list')
            </div>
        </div>
    </div>
@endsection