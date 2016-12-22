<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grafica extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Index(){
		// Carregamos a library PHPlot
		$this->load->model('alumno_modelo');
		$alumnos = $this->alumno_modelo->obtenerListaAlumnos();
		$this->load->library('PHPlot');

		//Definindo os dados do gráfico
		$dados = array(
			array('a',4),
			array('b',5),
			array('c',7),
			array('d',8),
			array('e',2),
			array('f',6),
			array('g',7)
		);

    $x = 0;
    $all=array();
    foreach ($alumnos as $alumno) {
    		$all[$x][0]=$alumno->nombre;
    		$all[$x][1]=$alumno->grado;
    		$x++;
    }
		$this->phplot->SetDataValues($all);

		//Imprimindo o gráfico na tela
		$this->phplot->DrawGraph();
	}

	public function Contitulos()
{
	$this->load->library('PHPlot');

	//Define os títulos
	$this->phplot->SetTitle("Titulo do Grafico");
	$this->phplot->SetXTitle('Eixo X');
	$this->phplot->SetYTitle('Eixo Y');

	//Define os valores para geração do gráfico
	$dados = array(
		array('a',3,4,2),
		array('b',5,9,1),
		array('c',7,2,6),
		array('d',8,1,4),
		array('e',2,8,6),
		array('f',6,4,5),
		array('g',7,2,3)
	);
	$this->phplot->SetDataValues($dados);

	//Imprime o gráfico na tela
	$this->phplot->DrawGraph();

}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
