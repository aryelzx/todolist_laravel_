<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarefa</title>
   <!-- font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body style="text-align:center; background-color: #f9f0f1;">
    <h1 style="
        color:#333;
        font-family: 'Poppins';
        font-weight: 600;
        font-size: 2rem;
        margin-top: 3em;
     ">
     Editar tarefa
    </h1>
    <h3>
        <x-alert/>
    </h3>
    <form action="/update" method="post" 
    style="
        margin-top: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    ">
        @csrf
        @method('patch')
        <div class="mb-3">
        <input style="border: none; border-radius: 5px; width:20em; padding:.7em;  height:3em;" type="text" name="title" value="{{$todo->Title}}" id="formGroupExampleInput">
        <input style="display:none; " type="number" name="id" value="{{$todo->id}}">
        <input  style="border: none; border-radius: 5px; margin-left:.7em; background-color:#341926;color:#f3f3f3; width:5em; height:3em;" type="submit" value="Salvar"/>
        <a href="/index"><button  style="border: none; border-radius: 5px; margin-left:.7em; background-color:#341926;color:#f3f3f3; width:5em; height:3em;">Voltar</button></a>
    </form>
    </div>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>