 $html = <<<HTML
        <!doctype html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Aktivasi Produk</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <style>
                    .aktivasi-img {
                        width: 100%;
                        height: 200px;
                        image-resolution: from-image;
                        background-position: center;
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-image: url('https://raw.githubusercontent.com/jauharimtikhan/README.md/restrict/restrict.png');
                    }
                </style>
            </head>

            <body>
                <div class="container py-5">
                    <div class="card card-body">
                        <div class="aktivasi-img"></div>
                        <h2 class="text-center text-danger">Silahkan Hubungi Developer Terlebih Dahulu, Untuk Mengaktifkan Project
                            ini.</h2>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
            </body>

            </html>
        HTML;
        $key = env('PROJECT_KEY');
        $result = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($key)))));

        if ($result != 'Drowssa_@#!321') {
            return response($html);
        } else {
            return $next($request);
        }
