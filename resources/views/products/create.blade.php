@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px;">Create New Product</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Product Name *</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price *</label>
            <input type="number" id="price" name="price" step="0.01" min="0" value="{{ old('price') }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', 0) }}">
        </div>

        <div class="form-group">
            <label for="image">Product Image *</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>

        <div class="action-buttons">
            <button type="submit" class="btn btn-success">Create Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
