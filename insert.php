<?php 
$titulo = $_POST['nomtitulo'];
$autor = $_POST['autor'];
$nrolibrosejm = $_POST['nroemplearelibros'];
$nrolirosprestados = $_POST['nroemplearelibrosprestados'];



class libro 
{
	public $titulo;
	public $autor;
	public $nrolibrosejm;
	public $nrolirosprestados;

	public function __construct($titulo, $autor, $nrolibrosejm,$nrolirosprestados)
	{
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->nrolibrosejm = $nrolibrosejm;
		$this->nrolirosprestados =$nrolirosprestados;	
	}
	#get recibe set toma el valor 

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getTitulo(){
		$envio = "el valor que se dio a evaluar es la siguinte ".$this->titulo;
		#echo $envio;
		return $this->titulo;
		
	}
}
$persona = new libro($titulo,$autor,$nrolibrosejm,$nrolirosprestados);
$persona->getTitulo();


?>