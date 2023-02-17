@extends('layouts.app');

@section('content')
<div class="container">
    @if (session('success_delete'))
        <div class="alert alert-warning" role="alert">
            Post with id {{ session('success_delete')->id }} was delite!
        </div>
    @endif

     <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        @if ($post->category)
                            <a href="{{ route('admin.categories.show', ['category' => $post->category]) }}">{{$post->category->name }}</a>
                        @endif
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('admin.tags.show', ['tag' => $tag]) }}">{{ $tag->name }}</a>{{ $loop->last ? '' : ', ' }}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edit</a>
                    </td>
                    {{-- <td>
                        <button class="btn btn-danger btn-delete-me" data-id="{{ $post->id }}">Elimina</button>
                    </td> --}}
                    <td>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-delete-me">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
@endsection
