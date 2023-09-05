<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CERTIFICATE</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }

        body {
            background: url({{ public_path('template/template.jpeg') }});
        }

        .name {
            text-align: center;
            margin: 370px auto 0;
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
        }

        .pelatihan {
            margin-top: 60px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            /* width: 100%; */
            margin-top: 160px;
            padding: 0;
        }

        .supervisor {
            padding-left: 300px;
            padding-right: 0;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
        }

        .manager {
            padding-left: 280px;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <h6 class="name">{{$name}}</h6>
    <p class="pelatihan">{{$pelatihan}}</p>
    <table>
        <tr>
            <td class="supervisor">{{$supervisor}}</td>
            <td class="manager">{{$manager}}</td>
        </tr>
    </table>
</body>
</html>
