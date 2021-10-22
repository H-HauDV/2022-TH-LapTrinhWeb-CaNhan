<html>

<head>
  <title>>Tuna Cafe</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="bg-light p-5 rounded-lg m-3">
    <h1 class="text-center">Welcome to the Tuna Cafe Survey!</h1>
    <form action="TunaResults.php" method="GET">
        <?php
            $menu = array("Turna Cesserole","Tuna Sandwich","Tuna Pie");
            $bestseller = 2;
            print "Please indicate all your favorite dishes. <br>";
            for ($i=0; $i < count($menu) ; $i++) { 
                # code...
                print("<input type=\"checkbox\" name=\"prefer[]\" value=$i> $menu[$i]");
                if($i == $bestseller){
                    print("<font color=red> Our Best Seller!!!</font>");
                }
                print("<br>");
            }
        ?>
        <br>
        <input class="btn btn-primary" type="submit" value="Submit">
        <input class="btn btn-success" type="reset" value="Reset">
    </form>
    </div>
</div>
</body>
</html>