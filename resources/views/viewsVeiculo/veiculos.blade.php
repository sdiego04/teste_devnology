<?php
?>

<html>
<head>
    <title>Veiculos</title>

    <!-- CSS only -->
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
                <ul class="navbar-nav mr-auto"></ul>
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
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/cadastroVeiculos">Novo Veiculo</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/veiculosVendidos">Historico de veiculos vendidos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/relatorioDeVendas">Relatorio de vendas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php
foreach ($lista as $listas){
?>
<div class="row g-2">
    <div class="col-sm input-group">
        <span class="input-group-text">Marca</span>
        <input type="text" class="input-group form-control" value="{{$listas->marca}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Modelo</span>
        <input type="text" class="input-group form-control" value="{{$listas->modelo}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Chassi</span>
        <input type="text" class="input-group form-control" value="{{$listas->chassi}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Placa</span>
        <input type="text" class="input-group form-control" value="{{$listas->placa}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Cor</span>
        <input type="text" class="input-group form-control" value="{{$listas->cor}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Ano de Fabricação</span>
        <input type="text" class="input-group form-control" value="{{$listas->anofabricacao}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Data da Compra</span>
        <input type="text" class="input-group form-control" value="{{$listas->datacompra}}" aria-label="City" readonly>
    </div>
    <div class="col-sm input-group">
        <span class="input-group-text">Valor da Compra</span>
        <input type="text" class="input-group form-control" value="{{$listas->valor}}" aria-label="City" readonly>
    </div>
</div>
<div class="col-sm input-group form-control">
    <form method="get" action="/formVenda/{{$listas->id}}" class="form-control">
        <?php if($listas->status==false){?>
        <button class="form-control btn-primary">Vender</button>
        <?php }if($listas->status==true){?>
         <input type="text" class="input-group form-control" value="Veiculo ja vendido" aria-label="City" readonly>
        <?php } ?>
        @csrf
    </form>
</div>
<?php } ?>
</body>
</html>
<?php
?>
