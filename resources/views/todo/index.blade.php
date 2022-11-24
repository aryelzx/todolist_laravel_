<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-color: #f9f0f1; text-align:center">
    <h1 style="
        color:#333;
        font-family: 'Poppins';
        font-weight: 600;
        font-size: 2rem;
        margin-top: 4rem;
     ">
     SUA LISTA DE TAREFAS</h1>
    <h3 style="
        color:#333;
        font-family: 'Poppins';
        font-weight: 600;
        margin-top: .5em;
        
        
     ">
        <a href="/create" 
        style="color: #444;
         font-style: italic;
         font-size: 1.5rem;
         ">Criar Tarefa</a>

    </h3>
    <h3>
        <x-alert/>
    </h3>
    <section>
        <div class="container" style="
        border: 1px solid #333;
        border-radius: 5px;
        margin-top: 2rem;
        ">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                                <tr>
                                    @if($todo->Completed)
                                    <td>
                                        <span style="text-decoration:line-through ">
                                        {{$todo->Title}}
                                    </td>
                                    @else
                                    <td>{{$todo->Title}}</td>
                                    @endif 
                                    <td>
                                        <a href="/{{$todo->id}}/edit" class="btn btn-primary">Editar</a>
                                        <a href="/{{$todo->id}}/completed" class="btn btn-success">Concluir</a>
                                        <a href="/{{$todo->id}}/delete" class="btn btn-danger">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p style="font-style:italic; margin: 2em; font-weight:500;"> &copy; Aryel Ramos 2022 </p>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>