<?php
    if(isset($_POST['submit'])){
        echo "Success";
        $name=$_POST['name'];
        $class=$_POST['class'];
        $university=$_POST['university'];
        $hobby=$_POST['hobby'];
        $dateofbirth=$_POST['dateofbirth'];
    }else
    echo "Error";
?>
<html>

<head>
  <title>Form Week2</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
  </div>
    <div class="bg-light p-5 rounded-lg m-3">
        <h1>Thanks for submit the form, Your information is below</h1>
        <h4>Name: <?php echo $name;?></h4>
        <h4>Class: <?php echo $class;?></h4>
        <h4>University: <?php echo $university;?></h4>
        <h4>Hobby: <?php echo $hobby;?></h4>
        <h4>Date of birth: <?php echo $dateofbirth;?></h4>
    </div>
</body>
</html>