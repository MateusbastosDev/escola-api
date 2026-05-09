<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Escolar</title>

    <link rel="stylesheet" href="css/style.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial, Helvetica, sans-serif;

            background:
            linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a,
            #2563eb
            );
        }

        .container{

            width:420px;
            background:white;
            padding:50px 40px;
            border-radius:25px;

            text-align:center;

            box-shadow:
            0 25px 50px rgba(0,0,0,0.25);

            animation:fade 0.5s ease;
        }

        .logo{

            width:90px;
            margin-bottom:20px;
        }

        h1{

            color:#1e3a8a;
            margin-bottom:10px;
            font-size:32px;
        }

        p{

            color:#555;
            margin-bottom:35px;
            font-size:15px;
        }

        .btn{

            display:block;

            width:100%;

            padding:16px;

            text-decoration:none;

            border-radius:15px;

            font-weight:bold;

            transition:0.3s;

            margin-top:15px;
        }

        .login{

            background:
            linear-gradient(
            135deg,
            #2563eb,
            #1e40af
            );

            color:white;
        }

        .login:hover{

            transform:translateY(-3px);

            box-shadow:
            0 15px 25px rgba(37,99,235,0.35);
        }

        .sobre{

            border:2px solid #2563eb;

            color:#2563eb;
        }

        .sobre:hover{

            background:#2563eb;
            color:white;
        }

        .footer{

            margin-top:30px;
            color:#888;
            font-size:13px;
        }

        @keyframes fade{

            from{
                opacity:0;
                transform:translateY(15px);
            }

            to{
                opacity:1;
                transform:translateY(0);
            }
        }

    </style>

</head>

<body>

    <div class="container">

        <img
        src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
        class="logo">

        <h1>Sistema Escolar</h1>

        <p>
            Plataforma de gerenciamento de alunos,
            turmas e cadastros escolares.
        </p>

        <a href="pages/login.html" class="btn login">
            Entrar no Sistema
        </a>

        <a href="#" class="btn sobre">
            Sobre o Projeto
        </a>

        <div class="footer">
            Projeto Faculdade • CRUD Escolar
        </div>

    </div>

</body>
</html>
