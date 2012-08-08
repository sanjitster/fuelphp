

<?php
    //var_dump($content);

    if(isset($content))
    {

        echo '<ul>';
        if(is_array($content))
        {
            foreach ($content as $obj)
            {
                echo "<li>".$obj->actor_id.' - '.$obj->fullname."</li>";

            }
        }
        else
        {
            echo $content;
        }

        echo '</ul>';
    }

?>