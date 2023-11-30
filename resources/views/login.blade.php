<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="login.css" rel="stylesheet">
    <title>Login</title>
    <style>
                *{font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;}
                      
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-image: url('background/sea background.jpg');
                background-size: 1366px;
                background-repeat: no-repeat;
                }     
                .container{
                justify-items: center;
                margin-right: 70px;
                margin-top: 18px;
                width: 320px;
                background-color:rgb(112,70,84);
                color:white;                
                border-radius: 10px;
                padding: 30px; 
                }

            .container h1 {
                font-size: 26px;
                text-align: center;
                color: white;
            }

            .container .input-box {
                width: 100px;
                height: 50px;
                margin: 30px 0;
            }
            .mb3 input {
                width: 100%;
                height: 37px;                   
                background: transparent;
                border: none; 
                outline: none;
                border: 2px solid;
                border-radius: 40px;   
                color: white;            
            }

            .mb3 input::placeholder{
                color:white;
            }

            .mb3 i{
                position: absolute;
                right: 20px;
            }

            .btnlogin{
                width: 80px;
                height: 26px;
                margin-top: 8px;
                border: none;
                outline: none;
                border-radius: 40px;
                cursor:pointer;
                font-size: 16px;
                color: rgb(112,70,84);
                font-weight: 200;
            }
            </style> 
</head>
<body>  
<header class = "header"></header>
    
    <div class="container">
        <h1 class = jdllogin>Login</h1>

        @if ($errors -> any())
        <div clas ="alter alter-danger">
            <ul>@foreach($errors->all() as $item)
                <li>{{$item}}</li> 
                @endforeach 
            </ul> 
        </div>
        @endif 

        <form action="" method="POST">
            @csrf
            <div class="mb3">
                <label for="email" class="btnemail">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="mb3">
                <label for="password" class="btnpw">Password</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button name="submit" type="submit" class="btnlogin" >Login</button>
            </div>
        </form> 
    </div> 
    </div>
</body>
</html>