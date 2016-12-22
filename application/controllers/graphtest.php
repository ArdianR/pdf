<?php
  class Graphtest extends CI_Controller {
    // Constructor
    function Graphtest()
    {
      parent:: __construct();
      // Url helper
      $this->load->helper('url');
      // Form helper
      $this->load->helper('form');
      // String helper
      $this->load->helper('string');
    }
    // Phplot test,
    // Todo: phplot own parameters too shrewd not to understand
    function index()
    {
     // Load chart library
      $this->load->library('graph');

      //-------------------------
     // Graph generation(first round)
     // Pass the data, we try to make random
      $arr = array(
        array('1', random_string('numeric',3),),
        array('2', random_string('numeric',3),),
        array('3', random_string('numeric',3),),
        array('4', random_string('numeric',3),),
        array('5', random_string('numeric',3),),
        array('6', random_string('numeric',3),),
        array('7', random_string('numeric',3),),
        );
     // Additional parameters, phplot key in the name of the method, set the value argument
      $params = array('SetTitle' => 'surveys of the 1',// title
        'SetLegend' => array('apple', 'banana', 'orange', 'grape', 'lemon', 'peach','pear'),// legend
        'SetDataType' => 'text-data-single',
        'SetPlotType' => 'pie',// chart the type of area bars linepoints lines pie points squared stackedbars thinbarline
        );
     // Data and a set of parameters
      $this->graph->setdata($arr,$params);
     // Graph generation
      $this->graph->draw();
     // Generate a graph of the acquired IMG tag
      $data['graph_img1'] = $this->graph->getimg();
     // Obtain the URL of the generated graphs
      $data['graph_url1'] = $this->graph->geturl();


      //-------------------------
     // Graph generation(second)
     // Init initializes
      $this->graph->init(array('width'=>600,'height'=>400));
     // Pass the data, we try to make random
      // $arr = array(
        // array('2005', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // array('2006', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // array('2007', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // array('2008', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // array('2009', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // array('2010', random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3), random_string('numeric', 3)),
        // );
      $arr = array(
       array('2001',  350,  200),
       array('2002',  300,  300),
       array('2003',  250,  400),
       array('2004',  200,  600),
       array('2005',  150,  700),
       array('2006',  260,  800),
       array('2007',  500,  900),
      );
     // Additional parameters, phplot key in the name of the method, set the value argument
      $params = array('SetTitle'=>'Usage Report',// title
        //'SetLegend' => array( 'Moon', 'Mars', 'Jupiter'),// legend
        'SetPlotType' => 'bars',// chart the type of area bars linepoints lines pie points squared stackedbars thinbarline
        );
     // Data and a set of parameters
      $this->graph->setdata($arr,$params);
     // Methods called for more direct
      $this->graph->obj->SetBackgroundColor('#f0f000');
      $this->graph->obj->SetDrawPlotAreaBackground(True);
      $this->graph->obj->SetPlotBgColor('#ffffff');
      //$this->graph->obj->SetLegendWorld(0.1, 900);
      $this->graph->obj->SetYTitle('MegaByte');


     // Graph generation
      $this->graph->draw();
     // Generate a graph of the acquired IMG tag
      $data['graph_img2'] = $this->graph->getimg();
     // Obtain the URL of the generated graphs
      $data['graph_url2'] = $this->graph->geturl();


      $data['title'] = 'PHPLOT test of the library';
     // Generate the view
      $this->load->view('graph_index.php',$data);


    }
  }
?>