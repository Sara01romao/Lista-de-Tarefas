<?php session_start(); //para chamar a função $_session

include "template.php"

       
        if(array_key_exists('nome', $_GET)){ 
            // echo "Nome informado: ". $_GET['nome'];
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

        $lista_tarefas =[];

        if (array_key_exists('lista_tarefas', $_SESSION)){
            $lista_tarefas = $_SESSION[ 'lista_tarefas'];
        }

        /*Para verificar se o índice existe usa o array_ket_exists
        já isset() para ver se existe variaveis*/

 ?> <!-- Pegar indice  -->