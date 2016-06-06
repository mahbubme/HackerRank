<?php

    $handle = fopen ( "php://stdin","r" );
    fscanf( $handle, "%d", $n );
    $arr_temp = fgets( $handle );
    $numbers = explode( " ", $arr_temp);
    $sum = intval( array_sum( $numbers ) );

    echo $sum;

    fclose( $handle );

?>