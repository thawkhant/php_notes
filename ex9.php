<!DOCTYPE html>
<html>
<head>
	<title>Ex9</title>
</head>
<body>
	  
	  Date Time 
	  <hr/>


	<?php  

    date_default_timezone_set('Asia/Yangon');   // to get our local time // go get php mantual time zone sir
    echo date("d-m-Y");
    echo "<br/>";
    echo date("D-m-Y");
    echo "<br/>";
    echo date("D-M-Y");
    echo "<br/>";
    echo date("D-F-Y");
    echo "<br/>";
    echo date("d-m-Y h:i");   // i is mean minute // times is not correct by default
    echo "<br/>";
    echo date("d-m-Y h:i:a");  // a is mean am/pm format	
    echo "<hr/>";

    echo date("d-m-Y h:i:a");
    echo "<br/>";

    $currentDate = date_create(date("d-m-y"));    // add 10 more days
    date_add($currentDate,date_interval_create_from_date_string("10 days"));
    echo date_format($currentDate,'d-m-y');

    echo "<hr/>";

    $currentDate = date_create(date("d-m-y"));    // substr 10 more days
    date_sub($currentDate,date_interval_create_from_date_string("10 days"));
    echo date_format($currentDate,'d-m-y');

    echo "<hr/>";

    echo cal_days_in_month(CAL_GREGORIAN,date("m"), date("Y"));  // how many days in current month





	?>
</body>
</html>