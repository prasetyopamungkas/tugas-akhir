@extends('adminlte::page')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('title','TAMPIL PRODUK')

@section('content_header')
    <h1>TAMPILKAN PRODUK</h1>
@stop

@section('content')

<section>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Detail Product</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('products.index')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                All Products
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input value="{{$product->name}}" disabled id="name" name="name" type="text" class="form-control" placeholder="Product Name">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail Product Name</label>
                    <textarea class="form-control" disabled placeholder="Detail Product Name" name="detail" id="detail" cols="12" rows="3">{{$product->detail}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <div>
                        <img class="mt-2" src="/img/{{ $product->image }}" width="300px">
                    </div>
                </div>

                <div>
                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-success btn-icon-text mb-2 mb-md-0">
                        Edit Product
                    </a>
                </div>

            </form>
        </div>

    </div>
</section>
@stop