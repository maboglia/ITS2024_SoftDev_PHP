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

    $curricula = $controller->getCurricula();

    if (isset($_POST['nome']) && isset($_POST['cognome'])  ) {
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];

        $controller->addCurriculum($nome, $cognome);

        //var_dump($controller->getCurricula());//ispettore

    }



    include './view/form.php';


    include './view/table.php';
?>