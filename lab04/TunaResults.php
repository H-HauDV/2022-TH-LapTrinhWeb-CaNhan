<html>
<head>
  <title>>Tuna Cafe Result</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="bg-light p-5 rounded-lg m-3">
    <?php
    $menu = array("Turna Cesserole", "Tuna Sandwich", "Tuna Pie");
    $prefer = $_GET["prefer"];
    if(count($prefer) == 0){
        print("Please pick some favorite <br>");
    }else{
        print("Your selection are <br> <ul>");
        foreach ($prefer as $item){
            print("<li> $menu[$item] </li>");
        }
        print("</ul>");
    }
    ?>
    </div>
</div>
</body>

</html>