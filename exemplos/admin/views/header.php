<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- CSS personalizado -->
    <style>
    .left-margin{
        margin:0 .5em 0 0;
    }
 
    .right-button-margin{
        margin: 0 0 1em 0;
        overflow: hidden;
    }
    </style>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
</head>
<body>

 
 
    <!-- container -->
    <div class="container">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="http://festadasnacoes.local/admin/index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://festadasnacoes.local/admin/views/VFuncionario.php">Funcionário</a></li>
            <li class="divider"></li>
            <li><a href="http://festadasnacoes.local/admin/views/VEvento.php">Evento</a></li>
            <li><a href="http://festadasnacoes.local/admin/views/VNacao.php">Nação</a></li>
            <li class="divider"></li>
            <li><a href="http://festadasnacoes.local/admin/views/VCardapio.php">Cardápio</a></li>
            <li><a href="http://festadasnacoes.local/admin/views/VPrato.php">Prato</a></li>
            <li class="divider"></li>            
            <li><a href="http://festadasnacoes.local/admin/views/VProduto.php">Produto</a></li>
            <li><a href="http://festadasnacoes.local/admin/views/VUnidade.php">Unidade</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manutenção<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://festadasnacoes.local/admin/views/VCliente.php">Cliente</a></li>
            <li><a href="http://festadasnacoes.local/admin/views/VUsuario.php">Usuário</a></li>
            <li class="divider"></li>
            <li><a href="http://festadasnacoes.local/admin/views/VPedido.php">Pedido</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 
 
        <?php
        // Cabeçalho da página
        echo "<div class='page-header'>";
            echo "<h2>{$page_title}</h2>";
        echo "</div>";
        ?>