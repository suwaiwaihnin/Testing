@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        <form method="post">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <input type="text" name="body" class="form-control">
            </div>
            <div class="forn-group">
                <label>Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $categories)
                    <option value="{{ $categories['id'] }}"> {{$categories['name']}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Add Article" class="btn btn-primary">
        </form>
    </div>
@endsection