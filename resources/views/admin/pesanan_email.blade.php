<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paripurna Mail</title>
</head>

<body>
    <h1>Pesanan Jasa Baru</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{ $data->nama }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ $data->email }}</td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>: {{ $data->telepon }}</td>
        </tr>
        <tr>
            <td>Jasa</td>
            <td>:
                @foreach($data->produk as $o)
                    {{$o->produk->name}},
                @endforeach
            </td>
        </tr>
    </table>
</body>

</html>
