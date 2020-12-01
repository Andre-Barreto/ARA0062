<?php 
include_once "servico/Autenticacao.php";
include_once "servico/Bd.php";
include_once 'header.php'
?>
        
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/pet4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/pet3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/pet5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>



   <div class="col mb-4">
        <div class="card tex-center" style="width: 18rem;">
            <div class="card-body">

        
             <?php
        
           $bd = new Bd();
           $sql = "select * from blog";
           
           foreach ($bd->query($sql) as $row) {
                
                echo "<h5>". $row['id'] . "</h5>";
                echo "<h5>". $row['titulo'] . "</h5>";
                echo "<p>". $row['corpo'] . "</p>";
                
                echo "<td><a href='#' onclick ='Pergunta(". $row['id'] . ")'> Excluir</a></td>";
                echo "<td><a href='blog/AlterarBlog.php?id=". $row['id'] . "'>Alterar</a></td>";
                echo "<br></br>";
                
            }
           
         ?>
        
       
        
       
    
    </div>
    </div>
     </div>
    
    
        
  
    
        
        <script>
        function Pergunta(id) {

          if (confirm("Deseja realmente excluir ?")) {
            window.location.replace("https://jessicapp.000webhostapp.com/projetoFinal/blog/ExcluirBlog.php?id="+id);

          }
        }
        </script>

       

</div>

