<?php
session_start();
$pagina = ($_GET['p']);

//esse painel é responsivo será feita uma busca no banco e setado apenas os projetos que tenham o id desta scan



echo "<h3><a href='?p=projetos'>Projetos</a></h3>";
echo "<h3><a href='?p=cadproj'>Cadastrar Projeto</a></h3>";
echo "<h3><a href='?p=perfil'>Perfil</a></h3>";
echo "<h3><a href='?p=assumproj'>Assumir projeto</a></h3>";

if ($pagina == 'projetos'){
    //é aqui onde se procura no banco quais projetos essa scan vai ter
    ?>

<div id="content">

    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h2>Projetos:</h2>
        <div class="card" style="width: 18rem;">
            <img src="../projetos/peerless_dad/capa_peerless.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Peerless Dad</h5>
                <a href="../projetos/peerless_dad/peerless_dad_adm.php?pg=#" class="btn btn-primary">Editar Projeto</a>
            </div>
        </div>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </body>

    </html>
    <?php   
}

if ($pagina == 'cadproj'){
    echo"Aqui apareçerá as configurações para inserir um novo manga/manwha";
}

if ($pagina == 'assumproj'){
    echo"Aqui apareçerá as configurações para assumir um manga/manwha já existente";
}

if ($pagina == 'perfil'){
    echo"Aqui apareçerá as configurações do perfil";
}