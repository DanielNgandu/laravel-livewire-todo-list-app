<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire | Todo Application with Sorting, Filtering and Paginating</title>
    @livewireStyles
    @livewireScripts

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .error{
            color: red;
        }

        /*.container{*/
        /*    max-width: 70%;*/
        /*}*/
    </style>
</head>
<body>

<div class="container" >
    <div class="card">
        <div class="card-header">
            Laravel Livewire
        </div>
        <div class="card-body">
            <h5 class="card-title">Todo Application with Sorting, Filtering and Paginating</h5>
            <div class="row">
                <div class="col-md-3">


                    @livewire('todo.form-component') <!-- This component will display Todo form -->
                    @livewire('todo.todo-notification-component') <!-- This component will show notification when todo is saved or updated -->


                </div>

                <div class="col-md-9">

                    @livewire('todo.list-component') <!-- This component will list Todos -->

                </div>
            </div>        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
