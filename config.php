<?php

    spl_autoload_register(function($nomeClasse){

        $pastaClasses = 'classes/';

        $possiveisCaminhosPasta = [

            $pastaClasses,
            $pastaClasses . 'moodels/',
            $pastaClasses . 'views/',
            $pastaClasses . 'controllers/'

        ];

        foreach($possiveisCaminhosPasta as $pastaAtual){

            $nomearquivo = $pastaAtual . $nomeClasse. '.php';
            if(file_exists($nomeArquivo)){

                require_once $nomeArquivo;
                break;
            }

        }

    });

?>