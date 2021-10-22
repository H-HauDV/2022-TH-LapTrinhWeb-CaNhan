<!DOCTYPE html>
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
    <form class="form-group" method="POST" action="2.2.php">
        <h1 class="text-center">Information Form</h1>
        <br>
        <input class="form-control" type="text"  id="name" name="name" placeholder="Name">
        <br>
        <input class="form-control" type="text"  id="class" name="class" placeholder="Class">
        <br>
        <input class="form-control" type="text"  id="university" name="university" placeholder="University">
        <br>
        <label for="hobby">Hobby select</label>
        <select class="form-control" id="hobby" name="hobby">
          <option>Drive</option>
          <option>Reading books</option>
          <option>Watching TV</option>
          <option>Run, Swim, Sport ...</option>
          <option>Learining</option>
        </select>
        <br>
        <input class="form-control" type="date"  id="dateofbirth" name="dateofbirth" placeholder="Date Of Birth">
        <br>
        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
      </form>
      <br>
    </div>
</body>
</html>