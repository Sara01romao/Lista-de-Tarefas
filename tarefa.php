<?php session_start(); //para chamar a função $_session?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   
    <title>Gerenciador de Tarefa</title>
</head>
<body>
    <h1>Gerenciador de tarefas</h1>

    <form action="">
    
        <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name= "nome" >
                </label>

                <label>
                    <input type="submit" value="Cadastrar">
                </label>
        </fieldset>
    </form>  <!-- formulario -->

<?php 

       
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

    <table>
            <tr>
                <th>Tarefas</th>  
            </tr>
        
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                
                <tr>
                
                    <td><?php echo $tarefa; ?></td>
                </tr>

            <?php endforeach; ?>
            
    </table> <!-- 59 -->



</body>
</html>