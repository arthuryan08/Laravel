@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
<h1>Configurações</h1>



{{-- Condicionais --}}
{{-- @if ($idade > 18)
    Eu sou maior de Idade
@else
    Eu não sou maior de Idade
@endif

@isset($versao)
    Existe uma versão e é a {{$versao}}
@endisset

@empty($cidade)
    Não existe uma cidade
@endempty --}}

{{-- Loops --}}
{{-- Meu nome é {{$nome}}. Eu tenho {{$idade}} anos. <br>

@for($q=1;$q<=10;$q++)
    O valor é {{$q}} <br>
@endfor --}}


{{-- @if(count($lista)>0)
Lista do bolo:
<ul>
    @foreach($lista as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>
@else
A lista está fazia
@endif --}}

<ul>
    @forelse($lista as $item)
        <li>{{$item['nome']}} - {{$item['qt']}}</li>
    @empty
        <li>Não há ingredientes</li>
    @endforelse
</ul>

<form method="POST">
    @csrf

    Nome: <br />
    <input type="text" name='nome'> <br>

    Idade: <br />
    <input type="text" name='idade'> <br>

    Cidade: <br />
    <input type="text" name='cidade'> <br>

    <input type="submit" value='Enviar'>
</form>


<a href="/config/info">Informações</a>
@endsection