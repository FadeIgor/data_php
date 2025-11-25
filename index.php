<?php 
    date_default_timezone_set('Europe/Warsaw');
    echo date("d-m-Y H:i:s");

    $data = getdate();

    $dzien2 = $data['mday'];

    $mies = $data["mon"];

    $rok = $data["year"];

    $d1 = $rok.'-'.$mies.'-'.$dzien2;

    var_dump($data);

    echo "<br>";echo "<br>";echo "<br>";

    echo date("Y-m-d");             echo "<br>";            
    echo date("Y.m.d ");            echo "<br>";
    echo date("Y m d");             echo "<br>";
    echo date("Y");                 echo "<br>";
    echo date("y");                 echo "<br>";
    echo date("Y-m-d H:i:s");       echo "<br>";
    echo date("H.i d-m-Y");         echo "<br>";

    /*
        tak nie trzeba    
        $date = DateTime::createFromFormat('j-M-Y','15-Feb-2009');

        echo $date->format('Y-m-d').'<br>';
    */

    $date = date_create_from_format('j-M-Y','15-Feb-2009');

    echo $date->format('Y-m-d').'<br>';
    //lub
    echo date_format($date, 'Y-m-d');

    
    $data2 = '2-25-11-22';
    $dzientygodnia = date('N', strtotime($data2)) 

    if( $dzientygodnia >= 6 ){

    }

    $start = new DateTime('2025-11-01');
    $end = new DateTime('2025-11-30');

    $interval = new DateInterval('P1D');
    $period = new DatePeriod($start, $interval, $end);

    $licz_dni =0;
    foreach($period as $data) {
        $dzientygodnia = $data ->format('N');
        if //...
    }


    $dzisiaj = new DateTime();
    $dzisiaj->modify('next Friday');

    echo $dzisiaj->format('Y-m-d');


?>
