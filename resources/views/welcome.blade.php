<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        .business-card {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            padding: 20px;
        }

        .qr-code {
            width: 100%;
            max-width: 150px;
            margin: 0 auto 20px;
        }

        .contact-info {
            text-align: left;
        }

        .contact-info p {
            margin: 10px 0;
            font-size: 14px;
        }

        .bio {
            text-align: justify;
        }

        /* Media query for screens with a maximum width of 768px (typical for mobile devices) */
        @media (max-width: 768px) {
            .business-card {
                max-width: 100%;
                box-shadow: none;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <div class="business-card">
        <img class="qr-code" src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
        {{-- <div class="contact-info">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            <p><strong>Address:</strong> {{ $data['address'] }}</p>
            <p><strong>Location:</strong> {{ $data['location'] }}</p>
            <p><strong>Link:</strong> <a href="{{ $data['link'] }}" target="_blank">{{ $data['link'] }}</a></p>
        </div>
        <div class="bio">
            <p>{{ $data['bio'] }}</p>
        </div> --}}
    </div>
</body>
</html>
