<h2>Elenco CV</h2>

<table class="table">
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
    </tr>

<?php foreach($curricula as $cv) : ?>

    <tr>
        <td><?=$cv->nome?></td>
        <td><?=$cv->cognome?></td>
    </tr>

<?php endforeach; ?>   
 
</table>