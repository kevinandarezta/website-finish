<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PAGE</title>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: 'lato', sans-serif;
        min-height: 100vh;
    }

    .container{
        position:absolute;
        width: 100%;
        height:100%;
        overflow: hidden;
    }

    .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after{
        margin-left: 200px;
        transform-origin: -200px 50%;
        transition-delay: 0s;
    }

    .container:hover .center, .container:active .center{
        opacity: 1;
        transition-delay: 0.2s;
    }

    .top:before, .top:after, .bottom:before, .bottom:after{
        content: '';
        position: absolute;
        display: block;
        width: 200vmax;
        height: 200vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin:0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index:10;
        opacity: 0.65;
        transition-delay: 0.2s;
    }

    .top:before{
        transform: rotate(45deg);
        background-color: #e46569;
    }
    .top:after{
        transform: rotate(135deg);
        background-color: #ecaf81;
    }
    .bottom:before{
        transform: rotate(-45deg);
        background-color: #60b8d4;
    }
    .bottom:after{
        transform: rotate(-135deg);
        background-color: #3745b5;
    }
    .center{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 50%;
        top: 50%;
        margin-left: -200px;
        margin-top: -200px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
        opacity: 0;
        box-shadow: 0 0 25px;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay: 0s;
        color: #333;
        background-color: rgba(0,0,0,0.9);
        z-index: 9999;
    }

    .center input{
        width: 100%;
        padding: 15px 0;
        margin: 10px 0;
        border: none;
        color: #fff;
        outline: none;
        border-bottom: 2px solid #fff;
        background-color: transparent;
        text-transform: uppercase;
    }

    .center h2{
        color: #fff;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .center .button{
        border: 2px solid transparent;
        outline: none;
        width: 100%;
        padding: 14px 0;
        background-color: #7e87cf;
        color: #fff;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: bold;
        margin-top: 20px;
        cursor: pointer;
        transition: 0.5s all;
    }

    .center .button:hover{
        background-color: transparent;
        border: 2px solid #7e87cf;
        letter-spacing: 4px;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
        <?php 
            error_reporting(0);
            if($_GET['result'] == 'success'){
                echo "<p style='color: green;'>You successfully registered to the system.</p>";
            }
        ?>
        <h2>SIGN IN</h2>
        <form action="check_login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" class="button" value="LOGIN">
        </form>
    </div>
</div>
</body>
</html>