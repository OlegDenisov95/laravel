@extends('layouts.layout')

@section('title')
    @parent:: {{$title}}
@endsection
@section('header')
    @parent
@endsection
@section('content')
    <div class ="container">
        <div class="mt-5">
            @if($errors->any())
                <div class ="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    <form class="mt-5" method="post" action="{{route('posts.store')}}">

        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name = "title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" rows="5" name="content" placeholder="Content" value="{{ old('content') }}"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Rubric</label>
            <select class="form-control" id="rubric_id" name ="rubric_id">
                <option value="">Select rubric</option>
                @foreach($rubrics as $k => $v)
                  <option value="{{$k}}"
                  @if(old('$rubric_id')== $k) selected @endif
                  >{{$v}}</option>

                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
@endsection
