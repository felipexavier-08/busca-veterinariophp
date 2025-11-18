<?php 

    require_once('config.php');
    require_once __DIR__ . '/config.php';
    require_once __DIR__ . '/classes/views/AnimalView.php';

    $buscar = false;
    $valor = "";

    if(isset($_GET['nomeAnimal'])){

        $buscar = true;

        if($_GET['nomeAnimal'] != ""){
            $valor = $_GET['nomeAnimal'];
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Prontuario Veterinário</title>
</head>
<body>



    <form id="area-busca" action="index.php" method="get">

        <input type="text" name="nomeAnimal" placeholder="informe o nome do animal">
        <button>Buscar</button>

</form>

    <hr>

    <section id="resultado">

        <?php 

            if($buscar){

                $animalView = new AnimalView();

                if($valor == ""){

                    $animalView->ExibirTodosAnimais();

                }
                else{

                    $animalView->BuscarPeloNome($valor);
                    

                }

            }

        ?>

    </section>

</body>
</html>