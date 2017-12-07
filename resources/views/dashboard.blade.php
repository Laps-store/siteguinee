@extends('layouts.app')

@section('title')
   dashboard
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="color: blue">vous est ici!</p>
                    <p>You are logged in!</p>
                    <p>You are logged in!</p>
                    <p>You are logged in!</p>
                    <p>You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
