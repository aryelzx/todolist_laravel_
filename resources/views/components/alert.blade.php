<div>
    @if(session()->has('alerta'))
        {{session()->get('alerta')}}
    @elseif($errors->any())
        @foreach($errors->all() as $error)
            {{'Algo deu errado!'}}
        @endforeach
    @endif
</div>