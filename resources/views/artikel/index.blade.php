<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD Laravel Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
        <h2>Artikel</h2>
        <a href="{{route('artikel.create')}}" class="btn btn-success">Add New Data</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th  width="6%">No</th>
                    <th  width="17%">Judul</th>
                    <th  width="*%">Deskripsi</th>
                    <th  width="13%">Kategori</th>
                    <th width="12%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $d )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{ $d->judul}}</td>
                    <td>{{ $d->deskripsi}}</td>
                    <td>{{ $d->kategori}}</td>
                    <td>
                        <a href="{{url('artikel/edit/'.$d->id)}}" class="btn btn-warning btn-sm">edit</a>
                        <a href="{{url('artikel/delete/'.$d->id)}}" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links()}}
    </div>

</body>

</html>