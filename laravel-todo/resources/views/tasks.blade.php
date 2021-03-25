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
            <div class="col-sm-offset-3 col-sm-6">
                <Button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Add Task
                </Button>
            </div>
       </div>

        </form>
    </div>
{{--    Current Task--}}
    @if(count($tasks)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">

                </table>
            </div>
        </div>
    @section
