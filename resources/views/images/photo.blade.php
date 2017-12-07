@extends('../template_ls')

@section('title')
   contact Form
@stop

@section('content')
<br>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">Envoie d'une photo</div>
            <div class="panel-body">
                @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
                @endif
               {!! Form::open(['url'=>'photo', 'files'=>true]) !!}
               <div class="form-group {!! $errors->has('image') ? 'has-error' : ''!!}">
                   {{ Form::file('image', ['class'=>'form-control']) }}
                   {!!$errors->first('image', '<small class="help-block">:message</small>')!!}
               </div>
                 {!! Form::submit('Envoyer !', ['class'=>'btn btn-primary pull-right']) !!}
               {!! Form::close() !!}
            </div>
            
        </div>
    </div>
</div>
@stop
