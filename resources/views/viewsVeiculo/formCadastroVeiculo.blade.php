<?php

?>

<html>

    <title>Cadastro de veiculos</title>

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
    <form method="post" action=/cadastroVeiculos>
        <div class="container">
            <label for="idmarca" class="form-label">Placa:*</label>
            <input type="text" class="form-control" id="idmarca" name="placa" placeholder="Digite a placa aqui" required>
        </div>
        <div class="container">
            <label for="idmarca" class="form-label">Chassi:*</label>
            <input type="text" class="form-control" id="idmarca" name="chassi" placeholder="Digite a placa aqui" required>
        </div>
        <div class="container">
            <label for="idmarca" class="form-label">Ano de Fabricação:*</label>
            <input type="date" class="form-control" id="idmarca" name="anofabricacao" placeholder="Digite a placa aqui" required>
        </div>
        <div class="container">
            <label for="idmarca" class="form-label">Data da Compra:*</label>
            <input type="date" class="form-control" id="idmarca" name="datacompra" placeholder="Digite a placa aqui" required>
        </div>
        <div class="container">
            <label for="idmarca" class="form-label">Preço do Veiculo:*</label>
            <input type="number" step="0.01" class="form-control" id="idmarca" name="preco" placeholder="Digite a placa aqui" required>
        </div>
        <div class="container">
        Modelo:
        <select name="modelo" required oninvalid="this.setCustomValidity('Nenhum modelo cadastrado')"
                onchange="try{setCustomValidity('')}catch(e){}">
            <?php foreach($modelos as $modelo){ ?>
            <option  value="{{$modelo->id}}">{{$modelo->modelo}}</option>
            <?php } ?>
        </select>
        </div>
        <div class="container">
            Cor:
            <select name="cor" required oninvalid="this.setCustomValidity('Nenhuma cor cadastrada')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                <?php foreach ($cores as $cor){?>
                <option value="{{$cor->id}}">{{$cor->cor}}</option>
                <?php }?>
            </select>
        </div>
        <div class="container">
            Marca:
            <select id="idmarca" name="marcas" required oninvalid="this.setCustomValidity('Nenhuma marca cadastrada')"
                    onchange="try{setCustomValidity('')}catch(e){}">
                <?php foreach ($marcas as $marca){?>
                <option value="{{$marca->id}}">{{$marca->marca}}</option>
                <?php }?>
            </select>
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


