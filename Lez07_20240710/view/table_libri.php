<?php 
include_once("../repos/LibroDAO.php");
$dao = new LibroDAO();

?>


<table>
    <tr>
        <th>Titolo</th>
        <th>Pagine</th>
        <th>Prezzo</th>
        <th>Autore</th>
    </tr>

    <?php foreach ($dao->getLibri() as $libro) : ?>
    <tr>
        <td><?=$libro->titolo?></td>
        <td><?=$libro->pagine?></td>
        <td><?=$libro->prezzo?></td>
        <td><?=$libro->autore?></td>
    </tr>


    <?php endforeach; ?>
</table>