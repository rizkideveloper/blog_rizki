@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Category</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/categories" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('categoryName')
                is-invalid
            @enderror"
                    id="categoryName" name="categoryName" value="{{ old('categoryName') }}" autofocus>
                @error('categoryName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug')
                is-invalid
            @enderror"
                    id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>

    <script>
        const categoryName = document.querySelector('#categoryName')
        const slug = document.querySelector('#slug')

        
        categoryName.addEventListener('change', function(params) {
            fetch('/dashboard/categories/checkSlug?categoryName=' + categoryName.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        
    </script>
@endsection