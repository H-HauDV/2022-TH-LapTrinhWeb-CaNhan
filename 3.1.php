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
      <table>
        <tr>
          <td>Your Name: </td>
          <td><Input type="text"  id="name" name="name"></Input></td>
        </tr>
        <br>
      </table>
        
      <table>
        <tr>
          <td>Date: </td>
          <td><select name="date" >
            <?php 
              for ($i=1;$i<=31;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
          <td><select name="month" >
            <?php 
              for ($i=1;$i<=12;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
          <td><select name="year" >
            <?php 
              for ($i=1;$i<=2000;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
        </tr>
        <br>
        <tr>
          <td>Time: </td>
          <td><select name="hour" >
            <?php 
              for ($i=1;$i<=24;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
          <td><select name="minute" >
            <?php 
              for ($i=1;$i<=60;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
          <td><select name="second" >
            <?php 
              for ($i=1;$i<=60;$i++){
                print("<option>$i</option>");
              }
            ?>
            </select>
          </td>
        </tr>
        <tr>
          <td align="right"><input type="SUBMIT" value="Submit"></td>
          <td align="left"><input type="RESET" value="Reset"></td>
        </tr>
      </table>
    </div>
</body>
</html>