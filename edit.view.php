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
        class="btn01"
        onclick= "">
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

<div class="cajita2">
    <div id="display">
        00:00:00

    </div>

    <br/>

    <div class="buttons">
    <button id="startStop" name="start" onclick="startStop()">Start</button> <button id="reset" name="reset" onclick="reset()">Reset</button>
    </div>

    <br/>
    <br/>
</div>   




<div class="cajita">
    <form action="edit.php" name="form-edit" method="post">

            <div class="id">
                <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
            </div>

            <div class="date">
                <label>Date</label>
                <input type="date" name="date" value="<?php echo $resultado['date']; ?>">
            </div>

            <br/>
            <div class="project">
                <label class="project01">
                    Project:  &nbsp
                </label>
                
                <input type="text" class="project02" name="project" value="<?php echo $resultado['proyecto']; ?>"></input>
            </div>
            <br/>

            <div class="project">
                <label class="project01">
                    Time:  &nbsp
                </label>
                
                <input type="text" class="project03" name="time" value="<?php echo $resultado['time']; ?>"></input>
            </div>

            <br/>
            <br/>


            <div class="prueba">
            <div id="myDIV" class="header">
                <h2>Tasks:</h2>
                <br/>
                <textarea class="description02" name="task" rows="12" cols="50"><?php echo $resultado['task']; ?></textarea>
            <br/>
            <br/>
            <ul id="myUL">


            </ul>
            </div>

            <div class="description">
                <label class="description01" for="description02">Description:</label>
            <br/>
            <br/>
            
            <textarea class="description02" name="description" rows="12" cols="50">
            <?php echo $resultado['descripcion']; ?>
            </textarea>
            </div>

            </div>

            <br/>

            <div class="btnsave">
                <input type="submit" name="save" class="btnSave" value="Save">
            </div>
     </form>
</div>



<script src=app.js></script>
</body>
</html>