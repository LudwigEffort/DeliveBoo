@extends('layouts.app');

@section('content')
<div class="container">

    @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Post with id {{ session('success_delete')->id }} was delete!
        </div>
    @endif

     <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Name</th>
                <th scope="col">Available</th>
                <th scope="col">Is Visible</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dishes as $dish)
                <tr>
                    <th scope="row">{{ $dish->id }}</th>
                    <td>{{ $dish->slug }}</td>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->description}}</td>
                    <td>{{ $dish->price }}</td>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->available}}</td>
                    <td>{{ $dish->is_visible}}</td>
                    <td>
                        <form action="{{ route('admin.dishes.destroy', ['dish' => $dish]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-delete-me">Elimina</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.dishes.edit', ['dish' => $dish]) }}" method="get">
                            <button class="btn btn-danger btn-delete-me">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('admin.dishes.show', ['dish' => $dish]) }}" method="get">
                            <button class="btn btn-danger btn-delete-me">Show</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
