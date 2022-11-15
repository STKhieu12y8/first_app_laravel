@extends('index')

@section('content')
    <h1>This is Foods view</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Mô tả</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                
                    <td><a href="foods/{{ $food->id }}">{{ $food->name }}</a></td>
                    <td>{{ $food->count }}</td>
                    <td>{{ $food->description }}</td>
                    <td><a href="foods/{{ $food->id }}/edit">Sửa</a></td>
                    <td>
                        <form action="/foods/{{ $food->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="foods/create">Them mon an</a>
@endsection
