<?php
class Charts extends Controller {

	function index()
	{
		$this->load->library('googlecharts');
		
		$chart1 = new googlecharts();
		
		$values = array(
					'IE7' => 22,
					'IE6' => 30.7,
					'IE5' => 1.7,
					'Firefox' => 36.5,
					'Mozilla' => 1.1,
					'Safari' => 2,
					'Opera' => 1.4,
				);	
				
		$gtitle = "Browser trends";
		$color = array('#AFD8F8','#F6BD0F','#8BBA00','#FF8E46','#008E8E');
		
		$chart1->setChartAttrs( array(
			'type' => 'pie',
			'title' => $gtitle,
			'data' => $values,
			'size' => array( 450, 200 ),
			'color' => $color
		));
		
		$data['chart_1'] = $chart1;	
		
		//The other chart
		
		$chart2 = new googlecharts();

		$gtitle = "Ice cream sales";
		$color = array('#AFD8F8');
		
		$values = array(
					'strawberry' => 43,
					'mint' => 3,
					'vanilla' => 15,
					'chocolat' => 20,
					'cream' => 8,
				);	
		
		$chart2->setChartAttrs( array(
			'type' => 'pie',
			'title' => $gtitle,
			'data' => $values,
			'size' => array( 450, 200 ),
			'color' => $color
		));
		
		$data['chart_2'] = $chart2;	

		
		$this->load->view('charts', $data);	
						
	}
	
}