<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Kartu Member</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        section {
            border: 2px solid #000;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .card {
            width: calc(100% - 40px); /* Adjusted width to consider padding */
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
            position: relative;
            margin-left: auto; /* Center the card */
            margin-right: auto; /* Center the card */
        }
        .logo img {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }
        .logo p {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        .nama, .telepon {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .barcode img {
            width: 100px;
            height: auto;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        @foreach ($datamember as $key => $data)
            @foreach ($data as $item)
                <div class="card">
                    <div class="logo text-center">
                        <img src="{{ public_path($setting->path_logo) }}" alt="logo">
                        <p>{{ $setting->nama_perusahaan }}</p>
                    </div>
                    <div class="nama"><strong>Nama : </strong>{{ $item->nama }}</div>
                    <div class="telepon"><strong>Telepon: </strong>{{ $item->telepon }}</div>
                    <div class="barcode text-center">
                        <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG("$item->kode_member", 'QRCODE') }}" alt="qrcode">
                    </div>
                </div>
            @endforeach
        @endforeach
    </section>
</body>
</html>
