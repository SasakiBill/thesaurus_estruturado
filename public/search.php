<?php
    include 'header.php';
?>
<!---
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
<h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>-->

<div class ="cconceito-container">
    <div class="conceito-container">
    <?php
        if (isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM conceito WHERE prefLabel LIKE '%$search%'
            OR altLabelA LIKE '%$search%' OR definitionA LIKE '%$search%' OR tipoConceito LIKE '%$search%'";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo "<h4>Foram encontrados " .$queryResult. " resultados da pesquisa: " .$search." </h4> ";
            echo "<h4>Para aprender melhor sobre algum conceito de sua pesquisa, clique em seu nome.</h4>";

            if ($queryResult > 0){
                while($row = mysqli_fetch_assoc($result) ) {
                    echo "
                    <div class='conceito-box'>
                        <h3>--------------------------------------------------------------------------</h3>
                        <h4>Nome do Conceito Preferêncial: </h4><a href='../public/resultSearch.php'>".$row['prefLabel']."</a> 
                        
                        
                    </div>";
                }
            } else {
                echo "<h3>Não há resultados para a pesquisa com base na sua pesquisa.</h3>";
            }
        }
    ?>
    </div>
</div>