<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #656d74;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        a{
            text-decoration:none;
            color: #656d74;
            display:block;
            padding: 1em 2em;
        }
        a:hover, a:active, a:focus{
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
            margin:8px;
        }

        .title {
            font-size: 96px;

            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
            margin:28px;
        }
        .welcome-login{
            font-size:24px;
            border-radius: 1em 1.5em 2em .5em ;

        }
        button{
            background-color:white;
            padding:1em 2em;
        }
        button:hover{
            background-color: #586434;
            color: #c0d9ff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Hatch.es</div>
        <div class="quote">{{ Inspiring::quote() }}</div>
        <a href="auth/login"><button class="welcome-login">Fish on!</button></a>
    </div>
</div>
</body>
</html>
