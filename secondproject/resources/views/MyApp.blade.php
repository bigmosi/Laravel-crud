@extends('layouts.app')
@section('content')
    <div class="panel-body">
       @include('common.errors')
        <form action="/task" method="POST" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Task" class="col-sm-3 control-label">Tasks</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">

                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <Button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Tasks
                    </Button>
                </div>
            </div>
        </form>
    </div>
@endsection
