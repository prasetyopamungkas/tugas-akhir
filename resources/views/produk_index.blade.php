@extends('adminlte::page')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@section('title','DATA produk')

@section('content_header')
    <h1>DATA PRODUK</h1>
@stop

@section('content')
<section?>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Product</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('products.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add New Product
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Product Name</th>
                        <th class="pt-0">Product Detail</th>
                        <th class="pt-0">Product Image</th>
                        <th class="pt-0">Created At</th>
                        <th class="pt-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $index => $val)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->detail}}</td>
                            <td><img alt="img" src="/img/{{ $val->image }}" width="100px"></td>
                            <td>{{ $val->created_at }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{route('products.show', $val->id)}}"><i data-feather="eye"></i> Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('products.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@stop