<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <style>
        .nav{
background-color: rgb(174, 170, 170);
padding: 8px;
        }

        a{
            margin: 10px
        }
    </style>
</head>
<body>
    

    <nav class="nav">
        <a href="home">Home</a> 
        <a href="about">About Me</a>
        <a href="contact">Contact Me</a>
    </nav>
    <br><br>



    <form  style="margin-left:80px" method="POST">

        <label for="name">Name: </label> 
        <input style="margin-left: 30px" type="text" id="name" name="name" required> <br> <br>
        <label for="email">Email: </label>
        <input style="margin-left: 28px" type="email" id="email" name="email"><br> <br>
        <label for="message">Message:</label><br>
        <textarea style="margin-left: 80px" name="message" id="message" required cols="30" rows="10"></textarea> <br> <br> <br>
        <button style="margin-left: 150px; color:rgb(46, 4, 46); background-color:plum; width:50px; height:30px" type="submit"> Send</button>
    </form>

</body>
</html>