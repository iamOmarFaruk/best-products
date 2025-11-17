@extends('layouts.app')

@section('title', 'All Products')

@section('content')
<div class="card">
    <h2 style="margin-bottom: 20px;">All Products</h2>
    
    @if($products->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('images/products/' . $product->image) }}" 
                                     alt="{{ $product->name }}" 
                                     class="product-image">
                            @else
                                <div style="width: 80px; height: 80px; background-color: #ddd; border-radius: 4px;"></div>
                            @endif
                        </td>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $products->links() }}
        </div>
    @else
        <p style="text-align: center; padding: 40px; color: #666;">No products found. <a href="{{ route('products.create') }}">Create your first product</a></p>
    @endif
</div>
@endsection
