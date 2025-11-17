@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2>Product Details</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
        <div>
            @if($product->image)
                <img src="{{ asset('images/products/' . $product->image) }}" 
                     alt="{{ $product->name }}" 
                     style="width: 100%; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            @else
                <div style="width: 100%; height: 300px; background-color: #ddd; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #999;">
                    No Image
                </div>
            @endif
        </div>

        <div>
            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Product ID</h3>
                <p style="font-size: 16px;">{{ $product->product_id }}</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Name</h3>
                <p style="font-size: 20px; font-weight: 600;">{{ $product->name }}</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Description</h3>
                <p style="font-size: 16px; line-height: 1.6;">{{ $product->description ?? 'No description available' }}</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Price</h3>
                <p style="font-size: 24px; font-weight: 700; color: #28a745;">${{ number_format($product->price, 2) }}</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Stock</h3>
                <p style="font-size: 16px;">{{ $product->stock }} units</p>
            </div>

            <div style="margin-bottom: 20px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Created At</h3>
                <p style="font-size: 14px;">{{ date('F d, Y h:i A', strtotime($product->created_at)) }}</p>
            </div>

            <div style="margin-bottom: 30px;">
                <h3 style="color: #666; font-size: 14px; margin-bottom: 5px;">Last Updated</h3>
                <p style="font-size: 14px;">{{ date('F d, Y h:i A', strtotime($product->updated_at)) }}</p>
            </div>

            <div class="action-buttons">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit Product</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="confirmDelete(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
