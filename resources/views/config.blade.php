<h1>Configurações</h1>

<form method="POST">
    @csrf

    Nome: <br />
    <input type="text" name='nome'> <br>

    Idade: <br />
    <input type="text" name='idade'> <br>

    Cidade: <br />
    <input type="text" name='cidade'> <br>

    <input type="submit" value='enviar'>
</form>


<a href="/config/info">Informações</a>