@extends('layouts.app')
@section('content')
<div class="content-wrapper">
  
    
        <div class="container ">
            <h3 class="text-2xl font-medium text-gray-700">Our Products</h3>
            <div class="">
                @foreach ($products as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ url($product->image) }}" height="200px;" width="300px;" alt="" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">
                        
                    </div>
                    <div class="">
                        <h3 class="text-gray-700 uppercase">{{ $product->name }} </h3><h4>Price ${{ $product->price }}</h4>
                        <span class="text-gray-500"></span>
                        <form action="{{ route('cart_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-success">Add To Cart</button>
                        </form>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div> 

    
  </div>
  @endsection