<!doctype html>
<html lang="en">
<head>
  <title>Date Time Processing</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <div class="bg-light p-5 rounded-lg m-3">
        <br>
        <h1 class="text-center">Enter your name and select date and time for the appointment</h1>
        <form class="form-group" action="DateTimeProcessing.php" method="get">
            <?php
                if(array_key_exists("Date",$_GET)){
                    $date=$_GET["Date"];
                    $month=$_GET["Month"];
                    $year=$_GET["Year"];
                    $hour=$_GET["Hour"];
                    $minute=$_GET["Minute"];
                    $second=$_GET["Second"]; 
                    $name=$_GET["name"];
                }else{
                    $date=0;
                    $month=0;
                    $year=0;
                    $hour=0;
                    $minute=0;
                    $second=0;
                    $name=null;
                }
            ?>
            <br>
            <lable>Name</lable>
            <input class="form-control" type="text"  id="name" name="name" placeholder="Name" value="<?php if($name!=null) echo $name;?>" >
            <br>
            <div class="form-row">
                <div class="col-15">
                    <lable>Date</lable>
                </div>
                <div class="col-85">

                        <select class="form-group col-2 cl-wh" name="Date">
                            <?php
                            for ($i=1;$i<=31;$i++){
                                if ($date==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                        <select class="form-group col-2 cl-wh" name="Month">
                            <?php
                            for ($i=1;$i<=12;$i++){
                                if ($month==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                        <select class="form-group col-2 cl-wh" name="Year">
                            <?php
                            for ($i=1900;$i<=2020;$i++){
                                if ($year==$i){
                                    print ("<option selected>$i</option>");
                                }else{
                                    print ("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>

                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-15">
                    <lable>Time</lable>
                </div>
                <div class="col-85">
                            <select class="form-group col-2 cl-wh" name="Hour">
                                <?php
                                for ($i=0;$i<=23;$i++){
                                    if ($hour==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>


                            <select class="form-group col-2 cl-wh" name="Minute">
                                <?php
                                for ($i=0;$i<=59;$i++){
                                    if ($minute==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>


                            <select class="form-group col-2 cl-wh" name="Second">
                                <?php
                                for ($i=1;$i<=59;$i++){
                                    if ($second==$i){
                                        print ("<option selected>$i</option>");
                                    }else{
                                        print ("<option>$i</option>");
                                    }
                                }
                                ?>
                            </select>

                </div>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-success" type="reset" value="Reset">
        </form>
        <br><br><br>
        <?php
            include_once('VerifyValue.php');
            $checkDate=1;
            $check=0;//check Năm nhuận
            $checkTime=0;//Check hour if hour>12 ==> PM
            $check=CheckYear($year);
            print ("<br>Hi $name! ");
            print ("<br>You have choose to have an appointment on $hour:$minute:$second,$date/$month/$year");
            $checkDate=verifyDate($date,$month);
            if ($checkDate==1){
                print ("<br><br>More infomation");
                $checkTime=verifyTime($hour);
                if ($checkTime==1){
                    $hour=$hour-12;
                    print ("<br><br>In 12 hours, the time and date is $hour:$minute:$second PM, $date/$month/$year");
                }else{
                    print ("<br><br>In 12 hours, the time and date is $hour:$minute:$second AM, $date/$month/$year");
                }

                verifyMonth($month,$check);
            }
            else print("<br><br>This day is not true. Please choose day again!");
        ?>
        </div>
    </div>
</body>
</html>