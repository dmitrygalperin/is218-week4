<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

    echo "<br><br>";
    $date= str_replace('-', '/', $date);
    echo "2) Replace - with / in date: $date <br>";

    echo "3) \$date compared to \$tar: ";

    if(strtotime($date) > strtotime($tar)) {
        echo "The future<br>";
    } else if(strtotime($date) < strtotime($tar)) {
        echo "The past<br>";
    } else {
        echo "Oops<br>";
    }

    echo "4) Positions of '/' in \$date: ";

    for($i = 0; $i < strlen($date); $i++) {
        if($date[$i] == '/') echo "$i ";
    }

    echo '<br>';

    $word_count = count(explode("/", $date));
    echo "5) Words in \$date: $word_count <br>";

    $date_length = strlen($date);
    echo "6) Length of \$date: $date_length <br>";

    $first_ascii = ord($date[0]);
    echo "7) ASCII value of first char in \$date string: $first_ascii <br>";

    $last_two_chars = substr($date, -2);
    echo "8) Last two chars in \$date: $last_two_chars <br>";

    $exploded = explode("/", $date);
    echo "9) Date array: ";
    print_r($exploded);
    echo "<br>10) ";

    foreach($year as $year) {
        if($year % 4 == 0) {
            if($year % 100 == 0) {
                if($year % 400 == 0) {
                    echo "$year : True | ";
                } else {
                    echo "$year : False | ";
                }
            } else {
                echo "$year : True | ";
            }
        } else {
            echo "$year : False | ";
        };
    }


?>
