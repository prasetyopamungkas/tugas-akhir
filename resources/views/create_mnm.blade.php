<html>
<head>
    <title>Create Data Minuman</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container mt-4">
    @if (session('status'))
        <div class="alert alert-success"> 
            {{ session ('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Create Data Minuman
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{url('save')}}">
        @csrf
            <div class="form-group">
                id
                <input type="text" id="id" name="id" class="form-control" required=""> 
            </div>
            <div class="form-group">
                NAMA
                <input type="text" id="nama" name="nama" class="form-control" required="">
            </div>
            <div class="form-group">
                HARGA
                <input type="text" id="harga" name="harga" class="form-control" required="">
            </div>
            <div class="form-group">
                PILIHAN
                <input type="text" id="pilihan" name="pilihan" class="form-control" required="">
            </div>
            <div class="form-group">
                JENIS
                <textarea name="jenis" class="form-control" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> 
</div>
</body> 
</html>