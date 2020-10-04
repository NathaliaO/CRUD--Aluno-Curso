<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Certificado</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9eb0318087.js" crossorigin="anonymous"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 60px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="title m-b-md">
        <a type='button' href="/"> <i class="fas fa-long-arrow-alt-left" style="text-align: left; color: #636b6f "></i></a>
            Lista de Certificado
        </div>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-plus"></i> Adicionar </button>


        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Aluno</th>
                    <th>curso</th>
                    <th>Carga Horaria</th>
                    <th>Ações </th>
                </tr>
            </thead>
            <tbody>

                @foreach($certificados as $certificado)
                <tr>
                    <td>{{ $certificado->aluno }}</td>
                    <td>{{ $certificado->curso }}</td>
                    <td>{{ $certificado->carga_horaria }} Horas</td>
                    
                    <td>
                        <a type='button' href="certificado/{{$certificado->id}}"><i class="fas fa-certificate" style="color:green"></i></a>
                        <a type='button' data-toggle="modal" data-target="#deleteModal{{$certificado->id}}"><i class="fas fa-eraser" style="color:red"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

         <!-- Vincular Aluno/Curso Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:blue">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:white">Cadastrar Certificado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('inserir_certificado') }}" method="POST">
                    <div class="modal-body">

                        @csrf
                        <label for=""> Nome do Aluno: </label>
                        
                        <select class="form-control" id="aluno" name="aluno">
                          <option >Selecione o Aluno..</option>
                            @foreach($alunos as $aluno)
                            <option value="{{$aluno->nome}}">{{$aluno->nome}}</option>
                            @endforeach
                        </select>
                        
                        <label for=""> Nome do Curso: </label>
                        <select class="form-control curso" name="curso">
                            <option >Selecione o Curso..</option>
                            @foreach($cursos as $curso)
                            <option  value="{{$curso->curso}}">{{$curso->curso}} - {{$curso->carga_horaria}} Horas </option>
                        
                            @endforeach
                        </select>

                        <br>
                        <label for=""> Confirme a Carga Horaria: </label>
                        <input name="carga_horaria" id="carga_horaria" >


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    @foreach($certificados as $certificado)
    <div class="modal fade" id="deleteModal{{$certificado->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:red">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:white">Deletar Curso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('deletar_certificado', ['id' => $certificado->id ])}}" method="POST">
                    <div class="modal-body">
                    @method('delete')
                    @csrf
                    <hidden type="text" name="id" id="id" value="{{$certificado->id}}">
                        <span style="font-weight: bold;">Tem certeza que deseja remover este Certificado? </span><br/><br/>

                        <span style="font-weight: bold;"> Nome do Aluno: </span> {{$certificado->aluno}} <br>

                        <span style="font-weight: bold;"> Nome do Curso: </span> {{$certificado->curso}} <br>

                        <span style="font-weight: bold;">Carga Horaria: </span> {{$certificado->carga_horaria}}
                        


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Remover</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>