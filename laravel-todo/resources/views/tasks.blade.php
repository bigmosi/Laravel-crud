@extends('layouts.app')

@section('content')
{{--    Bootstrap Boilerplate--}}

    <div class="panel-body">
        @include('common.errors')
        <form action="{{url('task')}}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}


        </form>
    </div>
    @section
