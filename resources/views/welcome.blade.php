<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #8c99a0;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        a{
            text-decoration:none;
            color: #8c99a0;
        }
        a:hover{
            color: #9ba8af;
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;

        }

        .content {
            text-align: center;
            display: inline-block;
            width:50%;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
        .welcome-login{
            font-size:24px;
            margin-top:20px;
            border-radius: .2em;;
        }
        button{
            background-color:white;
        }
        button:hover{

            color:#8c99a0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Hatch.es</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
        <button class="welcome-login"><a href="auth/login">Login</a></button>
    </div>
</div>
</body>
</html>
