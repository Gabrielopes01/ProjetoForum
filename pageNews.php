<?php
    Use \Classes\News;

    require_once("function.php");

    $noticia = News::getNewsById($num);

    echo "<h2 class='light center amber accent-1'; align='left' style='font-family: 'Trebuchet MS', sans-serif;'>". $noticia['Titulo']. "</h2>";

    isInFavorite($num);

    if($_SESSION['favorito'] == 1){
        echo "<a href='/0/favoriteOne/".$num."' class='btn-floating left waves-effect waves-light yellow pulse'><i class='material-icons black-text'>star</i></a>";
    } else if ($_SESSION['favorito'] == 0){
        echo "<a href='/0/favoriteOne/".$num."' class='btn-floating left waves-effect waves-light yellow'> <i class='material-icons white-text'>star</i></a>";
    } else {
        echo "<a href='#' class='btn-floating left disabled'><i class='material-icons white-text'>star</i></a>";
    }

    echo "<div class='row grey darken-3' style='height: 100%''>";
    echo "<p class='grey darken-1 center' style='font-size:20px; border-radius: 20px;'>Publicado por <strong>".$noticia['Usuario']."</strong>, no dia ".formatDate($noticia['Data'])."<a class='right white-text grey darken-3' style='border-radius:10px 10px 10px 0px; margin-right: 1px'><i class='material-icons left'>remove_red_eye</i> ".$noticia["Visualizacao"]."</a></p>";
    echo "<div class='white-text justify' style='font-size: 25px; color: white; height: 100%; border-radius: 20px'>".$noticia["Corpo"]."</div>";
    echo "</div>";
    echo "<br>";


