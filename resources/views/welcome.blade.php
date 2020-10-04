<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
            
            T.I Cursos Profissionalizantes
            </div>
        </div>

        

        <div class="container">

        <h4 style="text-align: center">“Eu tentei noventa e nove vezes e falhei, mas na centésima tentativa eu consegui. Nunca desista dos seus objetivos, mesmo que esses pareçam impossíveis: a próxima tentativa pode ser a vitoriosa” (Albert Einstein)</h4>
        <br>
            <div class="row">
                <div class="col">
                <a href="/alunos/novo" >
                <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="https://www.tjce.jus.br/wp-content/uploads/2018/08/online-3412473_960_720.jpg" height="250px" width="250px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text">Cadastro, Alteração ou Exclusão de <span style="font-weight: bold;">Alunos</span></p>
                </div>
                </div>
                </a>
            </div>
            
            <div class="col">
                <a href="/cursos/novo" >
                <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="https://www.pozellialimentos.com.br/img/blog/grande/fbae5982b88f8bcff3d9efe70bb9daec.png" height="250px" width="250px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text">Cadastro, Alteração ou Exclusão de <span style="font-weight: bold;">Cursos</span></p>
                </div>
                </div>
                </a>
            </div>

            <div class="col">
                <a href="/certificados/novo" >
                <div class="card" style="width: 22rem;">
                <img class="card-img-top" src="https://www.plataformaead.net/wp-content/uploads/2019/07/certificado-de-cursos-livres-plataforma-EAD.jpg" height="250px" width="250px" alt="Imagem de capa do card">
                <div class="card-body">
                    <p class="card-text">Gerar <span style="font-weight: bold;">Certificado</span></p>
                </div>
                </div>
                </a>
            </div>
        </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
