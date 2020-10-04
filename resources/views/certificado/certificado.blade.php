
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>

 @page {
            margin: 0px;
            
        }


.imagem {
width: 100%;
}	

.nome-curso {
position: absolute;
margin-top: 240px;
text-align:center;
color:#913610;
font-size:39px;
width:100%;

}

.nome-aluno {
position: absolute;
margin-top: 330px;
text-align:center;
color:#000;
font-size:31px;
width:100%;

}


.descricao {
position: absolute;
margin-top: 425px;
text-align:center;
color:#473e3a;
font-size:19px;
width:100%;

}


.carga {
position: absolute;
margin-top: 500px;
text-align:center;
color:#473e3a;
font-size:25px;
width:100%;

}


.cpf {
position: absolute;
margin-top: 534px;
text-align:center;
color:#473e3a;
font-size:15px;
width:100%;

}




</style>


 <body>
 @foreach($certificados as $certificado)
    <div class="nome-curso"> {{ $certificados->curso }} </div>
    <div class="nome-aluno"> {{ $certificados->aluno }} </div>
    <div class="descricao"> PARABÉNS PELA CONCLUSÃO COM EXCELÊNCIA DO CURSO <br><span class="text-warning"></span> MINISTRADO PELA T.I CURSOS PROFISSIONALIZANTES</div>
    <div class="carga"> {{ $certificados->carga_horaria }} Horas - Emitido em   {{\Carbon\Carbon::parse()->format('d/m/Y')}}</div>
@endforeach
    <img class="imagem" src="https://www.vpeventos.com/blog/wp-content/uploads/2017/12/molde_certificado-1200x800_c.png">
</body>