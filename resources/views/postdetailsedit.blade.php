@extends('layouts.layout')


@section('title', 'IndexPage')


@section('body')
 {{-- Form  for CRUD system --}}
<form id="contact" action="{{route('update',$data->id)}}" method="post" class='mt-5' >
    @csrf
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <fieldset>
          Name: <input name="name" type="text" id="name" value="{{$data->name}}">
        </div>
        <div class="col-md-6 col-sm-12">
          <fieldset>
          E-mail: <input name="email" type="text" id="email" value="{{$data->email}}" >
          </fieldset>
        </div>
        
        <div class="col-lg-12">
          <fieldset>
            <button type="submit" id="form-submit" class="main-button">Send</button>
          </fieldset>
        </div>
      </div>
    </form>

    @endsection