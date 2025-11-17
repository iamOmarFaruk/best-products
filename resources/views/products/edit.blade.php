@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px;">Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name *</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price *</label>
            <input type="number" id="price" name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', $product->stock) }}">
        </div>

        <div class="form-group">
            <label for="image">Product Image</label>
            @if($product->image)
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('images/products/' . $product->image) }}" 
                         alt="{{ $product->name }}" 
                         style="max-width: 200px; border-radius: 4px;">
                    <p style="font-size: 12px; color: #666; margin-top: 5px;">Current image</p>
                </div>
            @endif
            <input type="file" id="image" name="image" accept="image/*">
            <p style="font-size: 12px; color: #666; margin-top: 5px;">Leave empty to keep current image</p>
        </div>

        <div class="action-buttons">
            <button type="submit" class="btn btn-success">Update Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
