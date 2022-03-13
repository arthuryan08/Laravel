<h1>Configurações</h1>

Meu nome é {{$nome}}. Eu tenho {{$idade}} anos. <br>
Versão: {{$versao}}

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