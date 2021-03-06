@extends('layouts.app')
@section('content')
<div class="container">
  <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
     @method('PATCH')


          <div class="">
            {{$user -> id}}
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title')  ?? $user->profile->title ?? 'N/A'   }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('Title') }}</label>
          </div>



          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="des" type="des" class="form-control{{ $errors->has('des') ? ' is-invalid' : '' }}" name="des" value="{{ old('des')  ??  $user -> profile->des ?? 'N/A'  }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('Description')}}</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') ??  $user -> profile->url ?? 'N/A'   }}" required>
            <label data-error="wrong" data-success="right" for="defaultForm-email">{{ __('URL')}}</label>
          </div>


        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Post</button>
        </div>
  </form>
</div>
@endsection