<?php 

$immagini = [
  
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-treads.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-bundle.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-hands.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-jugulis.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-moth.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-thorns.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/frigibax.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/arctibax.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/baxcalibur.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/gimmighoul.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/gholdengo.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/wo-chien.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/chien-pao.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/ting-lu.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/chi-yu.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/roaring-moon.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-valiant.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/koraidon.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/miraidon.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/walking-wake.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-leaves.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/dipplin.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/poltchageist.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/sinistcha.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/okidogi.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/munkidori.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/fezandipiti.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/ogerpon.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/archaludon.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/hydrapple.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/gouging-fire.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/raging-bolt.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-boulder.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/iron-crown.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/terapagos.png",
 "https://img.pokemondb.net/sprites/scarlet-violet/normal/pecharunt.png",
];


//operatore ternario - if su una riga
$counter = isset($_POST['counter']) ? $_POST['counter'] : 0;

function incrementa() {
    global $counter, $immagini;
    
    if ($counter == count($immagini) - 1)
    $counter = 0;
    else
    $counter++;

}

function decrementa() {
    global $counter, $immagini;

    if ($counter == 0)
    $counter = count($immagini) - 1;
    else
    $counter--;


}

if (isset($_POST['azione'])){

    if ($_POST['azione'] == 'incrementa') incrementa();
    if ($_POST['azione'] == 'decrementa') decrementa();

}

?>

<form action="?page=galleria" method="post">
    <input type="hidden" name="azione" value="decrementa">
    <input type="hidden" name="counter" value="<?=$counter?>">
    <button class="btn btn-danger">-</button>
</form>

<form action="?page=galleria" method="post">
    <input type="hidden" name="azione" value="incrementa">
    <input type="hidden" name="counter" value="<?=$counter?>">
    <button class="btn btn-success">+</button>
</form>

<div id="result">

    <img src="<?=$immagini[$counter]?>" alt="">    


</div>

