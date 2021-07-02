<?php
?>
<html>

<head>

    <title>Cadastro de marcas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/veiculos">Veiculos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/cores">Cores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/modelos">Modelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/marcas">Marcas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <form method="post">
        <div class="container">
            <label for="idmarca" class="form-label">Modelo:*</label>
            <input type="text" class="form-control" id="idmarca" name="novomodelo" placeholder="Digite o modelo aqui" required>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary mb-3">Salvar</button>
        </div>
        @csrf
    </form>
</div>
</body>
</html>
<?php
?>

