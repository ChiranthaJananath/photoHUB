@extends('layouts.app')

@section('content')
    <div class="container" style="text-align: center;">
      <div class="span4" style="display: inline-block;margin-top:100px;">

        @if($errors->has(1))
          <div class="alert alert-block alert-error fade in"id="error-block">
             <?php
             $messages = $errors->all('<li>:message</li>');
            ?>
            <button type="button" class="close"data-dismiss="alert">×</button>
  
            <h4>Warning!</h4>
            <ul>
              @foreach($messages as $message)
                {{$message}}
              @endforeach

            </ul>
          </div>
        @endif

        <form name="createnewalbum" method="POST"action="{{URL::route('create_album')}}"enctype="multipart/form-data">
        {{ csrf_field() }}
          <fieldset>
            <legend>Create an Album</legend>
            <div class="form-group">
              <label for="name">Album Name</label>
              <input name="name" type="text" class="form-control"placeholder="Album Name"value="{{old('name')}}">
            </div>
            <div class="form-group">
              <label for="description">Album Description</label>
              <textarea name="description" type="text"class="form-control" placeholder="Album Description">{{old('descrption')}}</textarea>
            </div>
            <div class="form-group">
              <label for="cover_image">Select a Cover Image</label>
              <input type="file" name="cover_image">
            </div>
            <button type="submit" class="btnbtn-default">Create!</button>
          </fieldset>
        </form>
      </div>
    </div> <!-- /container -->
    @endsection