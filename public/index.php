<?php
    include 'header.php';
    header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<div class="topnav">
        <img src="../view/img/Capturar-removebg-preview.png">
        <a href="#">Sobre</a>
        <a href="#">Contribua!</a>
        <a href="#">Tutoriais</a>
        <a href="#">Tesauros da Computação</a>
        <a href="../public/index.php">Página Inicial</a>   
    <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Busque aqui pelo tesauro..." name="search">
      <button type="submit" name="submit-search"><i class="fa fa-search">Go</i></button>
    </form>
  </div>
</div>


<!--
<div class="container">
    <div id ="logo">
        <a href="https://www3.unicentro.br/"></a><img src="../php/Capturar-removebg-preview.png">
    </div>
    <div id="menu">
        <a href="../php/index.php">Página Inicial</a>
        <a href="#">Tesauros da Computação</a>
        <a href="#">Tutoriais</a>
        <a href="#">Contribua!</a>
        <a href="#">Sobre</a>
    </div>
</div>

<div class="inicio-container">
    <form action = "search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        
        <button type="submit" name="submit-search">Go</button>
    </form>
</div>-->
<h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>


<div class="article-container">
<h1>Página Inicial</h1>
    <div class="creators-container">
        <h3>dct: creator</h3>
        <h5>João Pedro Kelniar</h5>
        <h3>dct: creator</h3>
        <h5>Sandro Rauntenberg</h5>
        <h3>dct: creator</h3>
        <h5>Kelly Laís Wigger</h5>
        <h3>dct: description</h3>
        <h5>Apresenta-se uma proposta de Tesauro para os cursos de Bacharelado em Ciência da Computação. 
            Como uma forma de representação de conhecimento, relaciona os conceitos e definições dos cursos 
            de Ciência da Computação estabelecidas nos Referenciais de Formação para os Cursos de Graduação em 
            Computação - ano 2017. São relacionados os eixos de aprendizagem, suas competências e seus conteúdos 
            didáticos, representados pelo Simple Knowledge Organization Systems.</h5>
        

    </div>
</div>

<!--
<div class="article-container">
   
    
        $sql = "SELECT * FROM conceito";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                <div class='conceito-box'>
                    
                    <h3>Nome do Conceito Preferêncial: </h3> <a>".$row['prefLabel']."</a> 
                    
                    <h3>Nome do Conceito Alternativo: </h3> <a>".$row['altLabelA']."</a> 
                    
                    <h3>Definição do Conceito: </h3> <a>".$row['definitionA']."</a> 
                    
                    <h3>Tipo do Conceito:</h3> <a>".$row['tipoConceito']."</a> 
                    
                    
                </div>";
            }
        }
    ?>
-->
