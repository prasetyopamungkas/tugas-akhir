

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<center>
<h2> Data Makanan Berhasil disimpan </h2>
<hr />
<table class="table table-primary" style='width:50%; table-align:center;'>

    <tbody>
        <tr>
            <th scope='row'>1</th>
            <td>ID</td>
            <td>{{ $data['id'] }}</td>
        </tr>
        <tr>
            <th scope='row'>2</th>
            <td>NAMA</td>
            <td>{{ $data['nama'] }}</td>
        </tr>
        <tr>
            <th scope='row'>3</th>
            <td>HARGA</td>
            <td>{{ $data['harga'] }}</td>
        </tr>
        <tr>
            <th scope='row'>4</th>
            <td>JENIS</td>
            <td>{{ $data['jenis'] }}</td>
        </tr>
        <tr>
            <th scope='row'>5</th>
            <td>TINGKAT KEPEDASAN</td>
            <td>{{ $data['tingkat_kepedasan'] }}</td>
        </tr>
    </tbody>
</table>
</center>
<hr />
<center>
<a href=/read class="btn btn-success"> Tampilkan Data </a>
</center>