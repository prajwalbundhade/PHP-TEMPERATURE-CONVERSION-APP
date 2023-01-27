<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEMPERATURE CONVERSION APP</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
            line-height: 20vh;
        }
        .main-div{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .left-side{
            /* background: #000; */
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            border-radius: 23% 77% 70% 30% / 30% 30% 70% 70% ;
        }
        .left-side img{
            width: 400px;
            height: auto;
        }
        .right-side{
            width: 400px;
            height: 350px;
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            border-radius:  15px ;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .input1{
            width:  250px;
            height: 50px;
            outline: none;
            border-radius: 2px solid grey;
            padding: 6px;
            border-radius: 6px;
            font-size: 20px;
        }
        .selection{
            width:100%;
            margin: 20px 0;
            font-size: 18px;
            
        }
        .btn{
            padding: 10px 15px;
            border; none;
            outline: none;
            border-radius: 10px;
            background-color: #000;
            color: white;
            font-size: 18px;
        }
        .output{
            margin: 20px 0 0 0;
            color: #000;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <h1>TEMPERATURE CONVERSION APP</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="sun.png" alt="" srcset="">
            </div>
            <div class="right-side">
                <form method="POST" action="">
                    <input type="text" name="num" class="input1" placeholder="Enter value ">
                    <div class="selection">
                        <label >Cel</label>
                        <input type="radio" name="units" id="" value="cel">
                        <label >Faren</label>
                        <input type="radio" name="units" id="" value="feh">
                    </div>
                    <input type="submit" name="submit" class="btn" value="Convert Now">
                </form>
            
            <div class="output">
                <p> 
                    <?php
                    if(isset($_POST['submit'])){

                        $num = $_POST['num'];
                        $temp = $_POST['units'];

                        if($temp == "cel" ){
                            $result = $num * 9/5+32;
                            echo "The conversion value of Celsius in Fahrenheit is ". $result;
                        }else{
                            $result = ($num - 32) *5/9;
                            echo "The conversion value of  Fahrenheit in Celsius is ". $result;
                        }

                    }
                    ?>
                </p>
            </div>
            </div>
        </div>
    </header>
</body>
</html>