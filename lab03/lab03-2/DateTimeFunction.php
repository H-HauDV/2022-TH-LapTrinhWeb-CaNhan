<html>
<head>
  <title>Date Time Function</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<?php
function processDate($day_1, $day_2)
{
    $day1 = DateTime::createFromFormat('Y-m-d',$day_1);
    $day2 = DateTime::createFromFormat('Y-m-d',$day_2);
    $mess1 = $day1->format('l, F, Y');
    $mess2 = $day2->format('l, F, Y');
    print("Display 2 entered date <br>");
    print "$mess1 <br>";
    print "$mess2 <br>";

    $different = date_diff($day1,$day2);
    $diff = $different->format("%R%a days");
    print("Different between 2 days: $diff <br>");
    $today   = new DateTime('today');

    $year_old_1 = date_diff($day1,$today);
    $year_old_2 = date_diff($day2,$today);

    if(((int)($year_old_1->format("%R%a")))>=0 && ((int)($year_old_2->format("%R%a")))>=0){
        $age_1 = $year_old_1->format("%Y");
        $age_2 = $year_old_2->format("%Y");
        $diff_age = abs($age_1 - $age_2);
        print("Age of person 1 is $age_1 <br>");
        print("Age of person 2 is $age_2 <br>");
        print("Different age: $diff_age <br>");
    }else{
        print("Your inserted day is so far <br>");
    }

}
?>
<div class="container">
    <div class="bg-light p-5 rounded-lg m-3 ">
        <form class="form-group" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
            Enter user 1 birth day: <input class="form-control" type="date" id="birthday1" name="birthday1"><br>
            Enter user 2 birth day: <input class="form-control" type="date" id="birthday2" name="birthday2"><br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-success" type="reset" value="Reset"><br>
        </form>
    </div>
</div>

<?php
if (array_key_exists("birthday1", $_GET) && array_key_exists("birthday2", $_GET)) {

    $day_1 = $_GET["birthday1"];
    $day_2 = $_GET["birthday2"];
    processDate($day_1,$day_2);
}

?>
</body>

</html>