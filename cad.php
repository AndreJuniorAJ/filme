<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cad.css">
    <!-- fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

    <!-- biblioteca slich -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    

</head>
<body>
    <h1>Resultados da Pesquisa de Filmes</h1>
    <div class="resultado-container">
        <div class="slider">
            <?php 

                if(isset($_GET['filme'])){
                    $pesquisa = $_GET['filme'];
                

                
                    $url = "https://api.themoviedb.org/3/search/movie?query=$pesquisa&api_key=67fb87123860e85809ae04270813fc4e&language=pt-BR";
                

                
                    $json = file_get_contents($url);

                
                    if($json !== false){
                        $obj = json_decode($json);
                    
                        if($obj !==null && isset($obj->results)){
                            foreach($obj->results as $filme){
                                $titulo = $filme->title;
                                $poster = $filme->poster_path;
                            
                                $basePosterUrl = 'https://image.tmdb.org/t/p/w500';
                            
                                $posterUrl = $basePosterUrl . $poster;
                            
                                echo "<h2>$titulo</h2> " . "<br>";
                                echo "<img src='$posterUrl' alt='Poster de $titulo'>". "<br>";
                            };
                        };
                    };    
                };

            ?>
        </div>
    </div>
<script src="./app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>

