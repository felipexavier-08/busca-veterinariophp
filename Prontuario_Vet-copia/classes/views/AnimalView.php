<?php

    require_once __DIR__ . '/../controllers/AnimalController.php';

    class AnimalView{

        function ExibirTodosAnimais(){

            $animalController = new AnimalController();
            $listaTodosAnimais = $animalController->Listar();

            for ($i=0; $i < count($listaTodosAnimais); $i++) { 
                echo "<div class='divAnimal'>
                          <a class='a-animal' href='atendimento.html'>
                                <img src='images/{$listaTodosAnimais[$i]->Nome}.webp' alt='Foto de {$listaTodosAnimais[$i]->Nome}'>
                                <div> 
                                    <h1>{$listaTodosAnimais[$i]->Nome}</h1>
                                    <p>{$listaTodosAnimais[$i]->Especie->Nome}</p>
                                </div>
                            </a>
                        </div>";
            }

        }

        function BuscarPeloNome($nome){

            $animalController = new AnimalCOntroller();
            $listaAnimaisComEsteNome = $animalController->BuscarPeloNome($nome);

            if(count($listaAnimaisComEsteNome) == 0){

                echo "<p>Não existem animais com este nome</p>";

            }
            else{

                for ($i=0; $i < count($listaAnimaisComEsteNome); $i++) { 
                echo "<div class='divAnimal'>
                          <a class='a-animal' href='atendimento.html'>
                                <img src='images/{$listaAnimaisComEsteNome[$i]->Nome}.webp' alt='Foto de {$listaAnimaisComEsteNome[$i]->Nome}'>
                                <div> 
                                    <h1>{$listaAnimaisComEsteNome[$i]->Nome}</h1>
                                    <p>{$listaAnimaisComEsteNome[$i]->Especie->Nome}</p>
                                </div>
                            </a>
                        </div>";
                } 

            }  

        }
    }

?>