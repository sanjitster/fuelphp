<ul>
<?php
    //var_dump($content);

            echo '<li> Актёр - '.$actor->fullname.'</li>';
            echo '<li> Фильмография: </li>';

            foreach ($actor->films as $film)
            {
                echo "<li> Фильм - ".$film->title."</li>";
            }
?>
</ul>