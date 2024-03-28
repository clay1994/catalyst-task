<?php 

// Set the default limit to 100 or use the provided limit
$limit = isset($argv[1]) ? intval($argv[1]) : 100;

for ($i = 1; $i <= $limit; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "foobar";
    } elseif ($i % 3 == 0) {
        echo "foo";
    } elseif ($i % 5 == 0) {
        echo "bar";
    } else {
        echo $i;
    }

    // remove final "," which is not required
    if($i != $limit) {
        echo ",";
    } 
}
?>