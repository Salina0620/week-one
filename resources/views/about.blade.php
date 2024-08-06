<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>

    <style>
        .nav{
background-color: rgb(174, 170, 170);
padding: 8px;
        }


        a{
            margin: 10px
        }
    </style>
<nav class="nav">
    <a href="home">Home</a>
    <a href="about">About Me</a>
    <a href="contact">Contact Me</a>
</nav>
</head>
<body>
    
<br><br><br>

    {{-- <h1 style="margin-left:150px;">About Me</h1> <br> --}}

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiZNEu1F-RFPbYuwpFoRgW_j-P8FJ7t4MLBw&s" style="margin-left: 300px"  alt="profile"> <br> <br>
  
    <h1 style="margin-left: 250px; color:blueviolet;">{{ $name }}</h1> <br><br>    
  <div style="margin-left: 150px">

      <p>{{ $about }}</p>
      <p>Date Of Birth: {{ $dob }}</p>
      <p>Address: {{ $address }}</p>
      <p>Education: {{ $education }}</p>
      <p>GitLink: <a href="{{ $git }}">{{ $git }}</a></p>
  </div>

</body>
</html>