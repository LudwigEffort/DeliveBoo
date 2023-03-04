@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.dishes.store') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" name="name" value="{{ old('name') }}">
                <div class="invalid-feedback">
                    @error('name')
                        <ul>
                            @foreach ($errors->get('name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            {{-- uploader_img --}}
            <div class="mb-3">
                <label for="uploaded_img" class="form-label">Image</label>
                <input class="form-control @error('uploaded_img') is-invalid @enderror"
                type="file" id="uploaded_img" name="uploaded_img">
                <div class="invalid-feedback">
                    @error('uploaded_img')
                        <ul>
                            @foreach ($errors->get('uploaded_img') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @enderror
                </div>
            </div>

            {{-- <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                <div class="invalid-feedback">
                    @error('slug')
                        <ul>
                            @foreach ($errors->get('slug') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div> --}}

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                <div class="invalid-feedback">
                    @error('description')
                        <ul>
                            @foreach ($errors->get('description') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                <div class="invalid-feedback">
                    @error('price')
                        <ul>
                            @foreach ($errors->get('price') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="available" class="form-check-label">Available</label>
                <input type="checkbox" class="form-check-input" id="available" name="available" value="1" {{ old('available') ? 'checked' : '' }}>
                <div class="invalid-feedback">
                    @error('is_available')
                        <ul>
                            @foreach ($errors->get('available') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="is_visible" class="form-check-label">is_visible</label>
                <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible" value="1" {{ old('is_visible') ? 'checked' : '' }}>
                <div class="invalid-feedback">
                    @error('is_visible')
                        <ul>
                            @foreach ($errors->get('is_visible') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Crea</button>
            </div>
        </form>
    </div>
@endsection

<style lang="scss" scoped>

</style>
