<html>
<head>
    <title>Create Data Karyawan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
       <div class="alert alert-success">
         {{session('status')}}
</div>
@endif
<div class="card">
    <div class="card-header text-center font-weight-bold">
       UPDATE Data Karyawan
</div>
<div class="card-body">
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('edit')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            ID
        <input type="text" id="nim" name="nim" class="form-control" required="" value="{{$data->id}}" readonly>
</div>
        <div class="form-group">
            NAMA
        <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}">
</div>

<div class="form-group">
            GAMBAR
        <input type="file" id="gambar" name="gambar" class="form-control-file">
</div>
<div class="form-group">
            TELEPON
        <input type="text" id="telepon" name="telepon" class="form-control" required="" value="{{$data->telepon}}">
</div>
<div class="form-group">
            EMAIL
        <input type="text" id="email" name="email" class="form-control" required="" value="{{$data->email}}">
</div>
<div class="form-group">
            ALAMAT
        <textarea name="alamat"  class="form-control" required=""> {{$data->alamat}}</textarea>
</div>


<button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
</body>

</html>
