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

    <a href="info.php"><button
        class="btn01"
        onclick= "">
        Info
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
            <th>Projects configuration</th>
        </tr>
        
    <?php if (!empty($resultados)) { ?>
           
        <tr>
            <?php  foreach ($resultados as $res => $project) { ?> 
                <td>
                    <?php echo $project['proyecto']; ?>
                    
                    <a href="edit.php?id=<?php echo $project['id']; ?>"><input type="submit" name="btnAccion" class="edit" value="Edit"></a> 
                    <a href="delete.php?id=<?php echo $project['id']; ?>"><input type="submit" name="btnAccion" class="delete" value="Delete"></a>
                </td>
            <?php } ?>
        </tr>

    <?php  } else { ?>
        <tr>
            <td>
                <?php echo $error; ?>
            </td>
        </tr>
    <?php  } ?>


 </table>
</div>

<style>
    .tabla tr th {
        font-size: 1.5em;
    }

    .tabla tr td {
        background-color: #fff;
        padding: 5px;
        border: 0px solid #000;
        border-radius: 4px;
        margin-top: 10px;
        width: 100%;
        display: inline-block;
        text-align: center;
    }

    .edit {
        width: 50px;
        height:30px;
        background-color: #2AA114;
        color: #fff;
        position: relative;
        border-radius: 1px;
        border: 0px solid #000;
    }

    .edit:hover {
        background-color: #228110;
    }

    .delete {
        width: 50px;
        height: 30px;
        background-color: #D84425;
        color: #fff;
        position: relative;
        border-radius: 1px;
        border: 0px solid #000;
    }

    .delete:hover {
        background-color: #A71403;
    }
    

</style>

<script src=app.js></script>
<script src="ajax.js"></script>
</body>
</html>