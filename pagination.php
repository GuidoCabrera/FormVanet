<?php

include_once 'database.php';
include_once 'Client.php';

Class Pagination extends Database{

    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;

    function __construct($nPorPag){
         parent::__construct();

         $this->resultadosPorPagina = $nPorPag;
         $this->indice = 0;
         $this->paginaActual = 1;

         $this->calcularPag();
    }

    function calcularPag(){
        $query = $this->connect();
        $stmt = $query->prepare('SELECT COUNT(*) AS total FROM clientes');
        $stmt->execute();
        $this->nResultados = $stmt->fetch(PDO::FETCH_OBJ)->total;

        $this->totalPaginas = ceil($this->nResultados / $this->resultadosPorPagina);

        if(isset($_GET['pagina'])){
            if(is_numeric($_GET['pagina'])){
                if($_GET['pagina']>=1&&$_GET['pagina']<= $this->totalPaginas){
                    $this->paginaActual = $_GET['pagina'];
                    $this->indice = ($this->paginaActual-1) * $this->resultadosPorPagina;
                }
                else{ echo "pagina inexistente"; }
            }
            else{ echo "error al mostrar pagina"; }
        }     
    }

    function mostrarClient(){
        $query2 = $this->connect();
        $stmt2 = $query2->prepare("SELECT * FROM clientes LIMIT :pos, :n");
        $stmt2->bindParam(":pos",$this->indice,PDO::PARAM_INT);
        $stmt2->bindParam(":n",$this->resultadosPorPagina,PDO::PARAM_INT);
        $stmt2->execute();

        foreach($stmt2 as $client){
            $client2 = new Cliente($client['IdCliente'],$client['Nombre'],$client['Apellido'],$client['Direccion'],$client['Localidad'],$client['Telefono'],$client['Email']);
            include 'vistaClientes.php';
        }
    }

    function mostrarPag(){
        $active= '';

        echo "<ul>";

       if($this->totalPaginas<=6){
        for($i=0;$i<$this->totalPaginas;$i++){
          if(($i+1)==$this->paginaActual){
              $active = 'class="active"';
          }
          else{ $active= ''; }
          echo '<li><a ' .$active . 'href="?pagina='. ($i + 1). '">'. ($i + 1) . '</a></li>';
        }
       } 
       else{     
        if($this->paginaActual==1){ echo '<li><a href="#">Anterior</a></li>'; }
        else{ 
        echo '<li><a href="?pagina='.($this->paginaActual-1).'">Anterior</a></li>'; 
        }
        echo '<li><a class="active" href="#">'. $this->paginaActual . '</a></li>';
        if($this->paginaActual>=$this->totalPaginas){
            echo '<li><a href="?pagina=1">Siguiente</a></li>';
          }
        else{ echo '<li><a href="?pagina='.($this->paginaActual+1).'">Siguiente</a></li>'; }
      }
      echo "</ul>";
    }
}
?>