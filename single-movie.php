<?php 

get_header()

    $movie_description = get_field ('movie_description');
    $movie_director = get_field ('movie_director');
    $movie_actors = get_field ('movie_actors');
    $movies = get_the_terms(get_theID(), 'movie-info');
    print_r($movies);

?>

            <h1><?php echo get_the_post_thumbnail_url(get_theID())?></h1>
            <h2><?php echo $movie_director ?></h2>
            <div class="description">
                <?php echo $movie_description ?>
            </div>
            <h3><?php echo $movie_actors?></h3>
