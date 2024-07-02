<?php

    include './model/Curriculum.php';
    include './controller/CurriculumCtrl.php';

    session_start();//Deve precedere qualsiasi output
    
    if (isset($_POST['cancella']) && $_POST['cancella']=='tutto'){
        unset($_SESSION['controller']);
        //session_destroy();
    }
    


    if(isset($_SESSION['controller'])){//SESSIONE = spazio di memoria sul server
        $controller = $_SESSION['controller'];
    } else {
        $controller = $_SESSION['controller'] = new CurriculumCtrl();
    }

    if (isset($_POST['nome_file']) && !empty($_POST['nome_file'])){
        $controller->salvaCurricula($_POST['nome_file']);
    }
    if (isset($_POST['nome']) && isset($_POST['cognome'])  ) {
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        
        $controller->addCurriculum($nome, $cognome);

        //var_dump($controller->getCurricula());//ispettore
        
    }
    $curricula = $controller->getCurricula();
    define('TITOLO', 'My Personal Home Page');   

    
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITOLO?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container-fluid">

    <h1><?=TITOLO?></h1>

    <?php include './view/form.php'; ?>

    <?php include './view/table.php'; ?>

    </div>

</body>
</html>

