<!doctype html>
<html lang="en">
<head>
  <title>Angle Conversion</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
        <div class="bg-light p-5 rounded-lg m-3 ">
            <form action="AngleConversion.php" method="get">
                <?php
                    if (array_key_exists("Angle",$_GET)){
                        $angle=$_GET["Angle"];$convert=$_GET["Convert"];
                    }else{
                        $angle=0;$convert=null;
                    }
                ?>
                <div class="row">
                    <div class="col-15">
                        <p>Enter your angle</p>
                    </div>
                    <div class="col-85">
                        <input type="text" name="Angle" placeholder="Your angle...."<?php if($angle!=0) echo $angle;?>>
                    </div>
                    <br>
                    <div class="convert_angle">
                        <input type="radio" id="radians" name="Convert" value="To Radians">
                        <label for="radians">Degrees to Radians</label>
                        <input type="radio" id="degrees" name="Convert" value="To Degrees">
                        <label for="degrees">Radians to Degrees</label>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
            <br><br>
            <?php
                function AngleConvert($angle,$convert){
                    if ($convert=="To Radians"){
                        $angle=$angle/180*3.14;
                    }
                    if ($convert=="To Degrees"){
                        $angle=$angle*180/3.14;
                    }
                    return $angle;
                }
                $result=round(AngleConvert($angle,$convert),4);
                if ($angle!=null){
                    print ("Thank you for your choose!");
                    if ($convert=="To Degrees") print ("<br>The result is: $angle(rad)= $result °" );
                    if ($convert=="To Radians") print ("<br>The result is: $angle °= $result (rad)" );
                }
            ?>
            </div>
        </div>
</body>
</html>
