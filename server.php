<?php

    // 1° recuperare il contenuto di todo-list.json
    $string = file_get_contents('todo_list.json');
    
    // 2° convertire la stringa in arrey associativo
    $todo_list = json_decode($string, true);

    # CONTROLLO SE E' STATO INVIATO UN NUOVO TASK
    /* VAR_DUMP($_POST); */
    if (isset($_POST ['todoItem'])) {
        $todo_item=$_POST['todoItem'];

        $todo_array = [
            "language" => $todo_item,
            "done" => false,
        ];

        # aggiungo in coda un nuovo elemento all'array
        $todo_list[] = $todo_array;

        //3° scrivo il dato all'interno del file json
        file_put_contents('todo_list.json', json_encode($todo_list)); 
    }

    if (isset($_GET['deleteTask'])) {
        unset($todo_list[$_GET['deleteTask']]);
        /* var_dump($todo_list); */
        file_put_contents('todo_list.json', json_encode($todo_list));
        
    }

    header('content-Type: application/json');
    
    //4° codifico in formato json l'array dopo aver aggiunto un elemento
    echo json_encode($todo_list);
    
?>