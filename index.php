<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- personal CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- CDN Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    

    <!-- CDN Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- CDN axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    <div id="app">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="centered-content">
                            <ul class="list-unstyled">
                                <li class="p-3 border-solid-grey" v-for="(todo, index) in todoList">
                                    {{todo.language}}
                                    <button class="btn btn-danger" @click="deleteTask(index)">elimina</button>
                                       <!--  <button @click="deleteTask" class="btn btn-danger fa-solid fa-trash" id="button_canc"></button> -->
                        
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 my-2">
                            <input type="text" v-model="language" placeholder="linguaggio" class="form-control" @Keyup.enter="addTodo">
                            <button class="btn btn-primary" @click="addTodo">Premi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="./js/script.js"></script>
</body>
</html>