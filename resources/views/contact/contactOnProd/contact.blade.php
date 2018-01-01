@extends('layouts.app')

@section('title')
   Contact Form
@stop

@section('content')
<br>
<div class="row w3-padding-16" style="margin: 32px 0 32px 0" onclick="w3.hide('#appSidebar')">
    <div class="col-lg-offset-2 col-sm-8">
        <div class="panel panel-primary w3-bottombar w3-border-blue">
            <div class="panel-heading w3-xlarge w3-center "> Contactez nous par email</div>
            <div class="panel-body" >
               {!! Form::open(['url'=>'contact']) !!}
                   {!!Form::token()!!}
               <div class="form-group {!! $errors->has('nom_contact') ? 'has-error' : ''!!}">
                   {{ Form::text('nom_contact', null, ['class'=>'form-control','placeholder'=>'Votre nom']) }}
                   {!!$errors->first('nom_contact', '<small class="help-block">:message</small>')!!}
               </div>
               
               <div class="form-group {!! $errors->has('email_contact') ? 'has-error' : ''!!}">
                   {{ Form::email('email_contact',null, ['class'=>'form-control', 'placeholder'=>'Votre email']) }}
                   {!!$errors->first('email_contact', '<small class="help-block">:message</small>')!!}
               </div>
                   
               <div class="form-group {!! $errors->has('sujet') ? 'has-error' : ''!!}">
                   {{ Form::text('sujet', null, ['class'=>'form-control','placeholder'=>'Sujet de votre contact']) }}
                   {!!$errors->first('sujet', '<small class="help-block">:message</small>')!!}
               </div>
               
               <div class="form-group {!! $errors->has('texte') ? 'has-error' : ''!!}">
                   {{ Form::textarea('texte',null, ['class'=>'form-control', 'placeholder'=>'Votre email', 'rows'=>8]) }}
                   {!!$errors->first('texte', '<small class="help-block">:message</small>')!!}
               </div>
               
               
               <div class="form-group {!! $errors->has('g-recaptcha-response') ? 'has-error' : ''!!}">   
                  <div class="g-recaptcha " data-sitekey="6LfbPDwUAAAAAGThMq2vhU33yTSbLVu8r3YpjAT_"></div>
                  {!!$errors->first('g-recaptcha-response', '<small class="help-block">:message</small>')!!}
               </div>
               
               
               {!! Form::submit('Envoyer !', ['class'=>'btn btn-primary pull-right']) !!}
               {!! Form::close() !!}
            </div>
            
        </div>
    </div>
    
</div>
@stop
