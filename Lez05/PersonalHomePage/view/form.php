<h2>Aggiungi Curriculum</h2>
<div class="row">


<form action="" method="post">

    <div class="col-4">
        <label class="form-label" for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="col-4">
        <label class="form-label" for="cognome">Cognome</label>
        <input class="form-control" type="text" name="cognome" id="cognome">
    </div>

    <div class="col-2">
        
        <input class="btn btn-primary" type="submit" name="add" id="add" value="Aggiungi CV">
    </div>

</form>
</div>
<form action="" method="post">
    <input type="hidden" name="cancella" value="tutto">
    <input class="btn btn-danger" type="submit" value="Svuota carrello">
</form>

<form action="" method="post">

    <input class="form-control" type="text" name="nome_file" placeholder="nome del file da salvare">
    <input class="btn btn-success" type="submit" value="Salva su file">

</form>