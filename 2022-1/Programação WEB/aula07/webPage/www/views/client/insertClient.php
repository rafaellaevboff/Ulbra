<h1>Inserir Cliente</h1>
<form class="form" action="?controller=client&action=insertClientAction" method="post">
    <div class="mb-3 mt-3">
        <label class="form-label" for="">Nome</label>
        <input name="nome" class="form-control" type="text">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label" for="">E-mail</label>
        <input name="email" class="form-control" type="text">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label" for="">Telefone</label>
        <input name="telefone" class="form-control" type="text">
    </div>

    <div class="mb-3 mt-3">
        <label class="form-label" for="">Endereço</label>
        <input name="endereco" class="form-control" type="text">
    </div>

    <input class="btn btn-dark" type="submit" value="Enviar">
    
</form>