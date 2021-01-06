<?php
session_start();

if (!$_SESSION) {
    echo "<script>alert('Acceso restringido!')</script>";
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Project | Work Time Registration</title>
    <script src="https://kit.fontawesome.com/bfbccd75f9.js" crossorigin="anonymous"></script>
    
</head>

<body>

<!--barra de navegación, logo, formularios*/-->
<div 
        class="navbar">
    <div 
        class="logo">
    <img src="stopwatch.png"> 
        Work Time Registration 
</div>

<div class="btns">

<button
        class="btn03" >Hello,&nbsp
        <?php  echo $_SESSION['User'];  ?>
    </button>

    <a href="session.php"><button
        class="btn01" >
        Home
    </button></a>

    <a href="config.php"><button
        class="btn01"
        onclick= "">
        Config
    </button></a>

    <a href="close.php"><button
        class="btn01" >
        Logout
    </button></a>


</div>
</div>

<!--LOGIN-->

<div id="id02" class="modal">
<div
    class="close"
    onclick="document.getElementById('id02').style.display='none'">
    <i class="fas fa-times"></i>
</div>
</div>


</div>

    <!--SIGNUP-->

<div id="id01" class="modal">
    <div
        onclick="document.getElementById('id01').style.display='none'" 
        class="close" >
        <i class="fas fa-times"></i>
    </div>
</div>


<div class="cajita">

 <table id="tabla" class="tabla" id="tabla">
        <tr>
          <th>Project</th>
          <th>Date</th>
          <th>Time</th>
          <th>Task</th>
          <th>Description</th>
          <th><button type="submit" name="reload" class="reload" id="reload"><i class="fas fa-sync-alt"></i></button></th>
        </tr>
 </table>
</div>

<style>
    .reload {
        width: 50px;
        height: 30px;
        margin-left: -20px;
    }

    .tabla tr td {
        background-color: #fff;
        padding: 5px;
        border: 0px solid #000;
        border-radius: 3px;
        margin: 5px;
        margin-top: 5px;
    }

    .edit {
        width: 50px;
        height:30px;
        background-color: #2AA114;
        color: #fff;
        position: relative;
        margin-left: 4px;
        border-radius: 1px;
        border: 1px solid #000;
    }

    .delete {
        width: 50px;
        height: 30px;
        background-color: #D84425;
        color: #fff;
        position: relative;
        margin-left: 5px;
        border-radius: 1px;
        border: 1px solid #000;
    }

</style>

<script src=app.js></script>
<script src="ajax.js"></script>
</body>
</html>