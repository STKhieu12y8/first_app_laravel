@extends('index')

@section('content')
    <h1>Nhập món ăn food information</h1>
    <form action="/foods" method="post">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Enter food's name">
        <input class="form-control" type="text" name="count" placeholder="Enter food's count">
        <input class="form-control" type="text" name="description" placeholder="Enter food's description">
        <button class="btn btn-primary" type="submit">
            Submit
        </button>
    </form>
@endsection
