<html>
<head>
  <title>Angle Conversion</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
    <body>
    <div class="container">
    <div class="bg-light p-5 rounded-lg m-3">
        <br>Page calculates the distances from Chicago
        <br>Select a destination:
        <form  class="form-group" action="CheckDistance.php" method="GET">
            <select  class="form-control" name="destination[]" size=5 multiple>
                <option >Boston</option>
                <option >Dallas</option>
                <option >Miami</option>
                <option >Las Vegas</option>
            </select>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
</div>
</div>
    </body>
</html>