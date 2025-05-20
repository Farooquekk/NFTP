

<?php
$counter=0;
echo $counter.'<br>';
$_SESSION['count'] = ++$counter;
$refresh=isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
echo(($refresh?$counter++:$counter).'<br>');

?>

