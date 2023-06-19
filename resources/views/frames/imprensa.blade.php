<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viva Zona Oeste na Imprensa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/galeria/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Viva Zona Oeste na Mídia</h2>
            </div>
            <div class="row photos">
                @foreach ($imagens as $imagem)
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="/storage/{{$imagem -> imagem }}" data-lightbox="photos">
                            <img class="img-fluid" src="/storage/{{$imagem -> imagem }}">
                        </a>
                        <p class="text-justify">{{$imagem -> legenda}}</p>
                    </div>    
                @endforeach
            </div>
        </div>
    </div>
    <script type='text/javascript' src='/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>


    
</body>

</html>