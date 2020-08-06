
<!DOCTYPE html>
<html lang="pt-br">
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