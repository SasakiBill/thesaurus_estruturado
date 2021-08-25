<?php
    include 'header.php';
    include 'search.php';
?>

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

<div class ="cconceito-container">
    <div class="conceito-container">
    <?php
    if ($queryResult > 0){
        while($row = mysqli_fetch_assoc($result) ) {
            echo "
            <div class='conceito-box'>
                <h3>--------------------------------------------------------------------------</h3>
                <h4>Nome do Conceito Preferêncial: </h4><a href='../public/resultSearch.php'>".$row['prefLabel']."</a> 
                <h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>


                <h3>Nome do Conceito Alternativo: </h3> <h5>".$row['altLabelA']."</h5> 
                        
                <h3>Definição do Conceito: </h3> <h5>".$row['definitionA']."</h5> 
                        
                <h3>Tipo do Conceito:</h3> <h5>".$row['tipoConceito']."</h5> 
            </div>";
        }
    } else {
        echo "<h3>Não há resultados para a pesquisa com base na sua pesquisa.</h3>";
        
    }
    ?>
    </div>
</div>