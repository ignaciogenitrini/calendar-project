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
        class="btn01"
        onclick= "document.getElementById('id01').style.display='block'" >
        SIGNUP
    </button>

    <button
        class="btn03"
        onclick= "document.getElementById('id02').style.display='block'">
        LOGIN
    </button>

</div>
</div>

<!--LOGIN-->

<div id="id02" class="modal">
<div
    class="close"
    onclick="document.getElementById('id02').style.display='none'">
    <i class="fas fa-times"></i>
    </div>

<form class="modal-content" method='POST' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
    <div class="container">
        <h1 class="h102">
        LOGIN
        </h1>

    <label for="email">
        <b>Email</b>
    </label>

    <input
        type="email"
        placeholder="example@gmail.com"
        name="email">

    <label for="password">
        <b>Password</b>
    </label>

    <input
        type="password"
        placeholder="Enter Password"
        name="psw" >
 

    <button
        type="submit"
        class="btn04"
        name="button"
        value='login'>
        LOGIN
    </button>

  
    <?php  if (isset($_POST['button']) && $error != '') {    ?>
<script>alert('<?php echo $error; ?>');</script>
<?php  }   ?>

</div>
</div>
</form>


</div>

    <!--SIGNUP-->

<div id="id01" class="modal">
    <div 
        onclick="document.getElementById('id01').style.display='none'" 
        class="close" >
        <i class="fas fa-times"></i>
    </div>

<form class="modal-content" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="container">
        <h1 class="h101">
            SIGNUP
        </h1>

    <label>
        <b>First name</b>
    </label>

    <input
        type="text"
        placeholder="Enter your first name"
        name="fname">

    <label>
        <b>Last name</b>
    </label>

    <input
        type="text"
        placeholder="Enter your last name"
        name="lname">

    <label>
        <b>Email</b>
    </label>

    <input
        type="email"
        placeholder="example@gmail.com"
        name="email">

    <label>
        <b>Password</b>
    </label>

    <input
        type="password"
        placeholder="Enter Password"
        name="psw">


    <button
        type="submit"
        class="btn02"
        name="button"
        value='registro'>
        SIGNUP
        </button>

</div>
</div>
</form>

<?php  if (isset($_POST['button']) && $message != '') {    ?>
<script>alert('<?php echo $message; ?>');</script>
<?php  }   ?>

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
        <div class="date">
            <label>Date</label>
            <input type="date" name="date">
        </div>

         <br/>
        <div class="project">
            <label class="project01">
                Project:  &nbsp
            </label>
            
            <input type="text" class="project02" name="project"></input>
        </div>
        <br/>

        <div class="project">
            <label class="project01">
                Time:  &nbsp
            </label>
            
            <input type="text" class="project02" name="time"></input>
        </div>

        <br/>
        <br/>


        <div class="prueba">
        <div id="myDIV" class="header">
            <h2>Tasks:</h2>
            <br/>
            <textarea class="description02" name="task" rows="12" cols="50"></textarea>
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
        </textarea>
        </div>

        </div>

        <br/>

        <div class="btnsave">
            <button class="btnSave" name="submit">Save</button>
        </div>

</div>





<script src=app.js></script>
</body>
</html>