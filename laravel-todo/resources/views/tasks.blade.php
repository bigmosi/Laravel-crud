@extends('layouts.app')

@section('content')
{{--    Bootstrap Boilerplate--}}

    <div class="panel-body">
{{--        Display Validation Errors--}}
        @include('common.errors')
{{--        New Task Form--}}
        <form action="{{url('task')}}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}
{{--            Task Name--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="tex" name="name" id="task-name" class="force-control">
                </div>
            </div>
{{--            Add Task Button--}}
       <div class="form-group">

       </div>

        </form>
    </div>
    @section
