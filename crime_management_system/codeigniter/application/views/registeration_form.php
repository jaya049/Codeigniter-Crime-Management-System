<html>
    <head>
        <title></title>
        <style>
            .reg{
                border:1px solid;
                width:400px;
                height:auto;
                margin:10px;
                padding:10px;
                position:relative;
                left:400px;  
            }
            .reg h2{
                text-align:center;
            }
            .reg .ip{
                display:block;
                padding:10px;
                margin:5px;
                position:relative;
                left:50px;
            }
            .reg .sub{
                float:center;
                position:relative;
                left:50px;
            }
        </style>
    </head>
    <body>
        <div class="reg">
            <h2>Registeration Form</h2>
            <form action="<?php echo base_url(); ?>First/register" method="post">
                Name : <input class="ip" type="text" name="name"  ></br>
                Address :<textarea class="ip" name="addrs"></textarea></br>
                Gender :<input  type="radio" name="gender" value="female">F
                        <input type="radio" name="gender" value="male">M</br>
                Age :<input class="ip" type="text" name="age"></br>
                Email :<input class="ip" type="email" name="email"></br>
                Password :<input class="ip" type="password" name="pwd"></br>
                <input class="sub" type="submit" name="submit">
            </form>
            
        </div>
    </body>
</html>