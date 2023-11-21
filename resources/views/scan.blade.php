@php
    $csrfToken = csrf_token();
@endphp

<script>
    var csrfToken = "{{ $csrfToken }}";
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan Barcode</title>
    <!-- Tambahkan tautan Bootstrap dari CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Set background image */
            background-image: url('https://i.ibb.co/0DkX3xv/wpp.jpg');

            /* Properti background lainnya */
            background-size: cover; /* Sesuaikan ukuran gambar agar menutupi seluruh body */
            background-position: center; /* Posisikan gambar di tengah-tengah */
            background-repeat: no-repeat; /* Hindari pengulangan gambar */
        }

        #video-container {
            position: relative;
        }

        #scanner-container {
            width: 100%;
            height: auto;
            text-align: center;
        }

        #video-preview {
            width: 100%;
            height: auto;
        }

        #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /">
        <div class="modal-header"><h2><img src="https://i.ibb.co/2NVgBGm/qr-code-scan.png" width="50px"> Scan Barcode</h2></div>
        <div class="card-body">
            <div id="video-container">
                <div id="scanner-container">
                    <video id="video-preview"></video>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
           <h3><div id="result" class="mt-3"></div></h3> 
        </div>
    </div>
    

    <!-- Tambahkan tautan JavaScript Bootstrap dari CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Tambahkan tautan Instascan dari CDN -->
    <script type="text/javascript" src="{{asset('instasc/instascan.min.js')}}" ></script>

    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('video-preview') });

        scanner.addListener('scan', function (content) {
            document.getElementById('result').innerText = 'Hasil scan: ' + content;

            // Panggil fungsi untuk memproses hasil scan
            handleScanResult(content);
        });

         // Fungsi untuk memproses hasil scan
         function handleScanResult(result) {
            // Kirim hasil scan ke server menggunakan Ajax
            $.ajax({
                method: 'POST',
                url: '{{ route("process.scan") }}',
                data: {
            result: result,
            _token: csrfToken // Sertakan token CSRF di sini
        },
                success: function (response) {
                    alert(response.message);
                },
                error: function (error) {
                    console.error(error);
                    alert('Terjadi kesalahan saat memproses hasil scan.');
                }
            });
        }

        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('Tidak ada kamera yang terdeteksi.');
            }
        }).catch(function (e) {
            console.error(e);
        });
    </script>
</div>

</body>
</html>
