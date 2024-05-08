<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Button</title>
    <style>
        body{
            margin: 0;
            padding:0;
            height: 100vh;
            justify-content: center;
            align-items: center;
            display: flex;
            background-color: rgb(255, 255, 204);
        }

        .btn1{
            font-family: "Roboto", sans-serif;
            font-size: 18px;
            font-weight: bold;
            background:rgb(204, 153, 0);
            width: 160px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            color: #fff;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            -webkit-animation-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shedow, transform;
            transition-property: box-shedow, transform;
            margin-right: 20px;
        }
        .btn1:hover, .btn1:focus, .btn1:active{
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background-color: rgb(77, 57, 0);
        }
        .btn2{
            font-family: "Roboto", sans-serif;
            font-size: 18px;
            font-weight: bold;
            background: #1E90FF;
            width: 160px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            color: #fff;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            -webkit-animation-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shedow, transform;
            transition-property: box-shedow, transform;
            margin-right: 20px;
        }
        .btn2:hover, .btn2:focus, .btn2:active{
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background-color: blue;
        }
        .btn3{
            font-family: "Roboto", sans-serif;
            font-size: 18px;
            font-weight: bold;
            background: rgb(255, 0, 102);
            width: 160px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            color: #fff;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            -webkit-animation-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shedow, transform;
            transition-property: box-shedow, transform;
            margin-right: 20px;
        }
        .btn3:hover, .btn3:focus, .btn3:active{
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            background-color: rgb(77, 0, 31);
        }
    </style>
</head>
<body>
    <a href="#" class="btn1">Button</a>

    <a href="#" class="btn2">Button</a>

    <a href="#" class="btn3">Button</a>
</body>
</html>