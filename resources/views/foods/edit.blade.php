@extends('index')

@section('content')
<h1>Cập nhật đồ ăn</h1>
<form action="/foods/{{ $food->id }}" method="post">
    @csrf
    @method('PUT')
    <input class="form-control" type="text" name="name" value="{{ $food->name }}" placeholder="Enter food's name">
    <input class="form-control" type="text" name="count" value="{{ $food->cout }}" placeholder="Enter food's count">
    <input class="form-control" type="text" name="description" value="{{ $food->description }}" placeholder="Enter food's description">
    <button class="btn btn-primary" type="submit">
        Update
    </button>
</form>

@endsection