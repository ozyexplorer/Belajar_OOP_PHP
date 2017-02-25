<?php 


	//class nama_variabel
	class robot {

		//ini disebut dengan property / variabel yang berada di dalam class
		public $suara = "alhamdulillah";
		public $berat = 30;

	}

	//untuk memanggil class --> nama_variabel = new nama_variabel_class;
	$robot1 = new robot();


	echo "suara robotnya ".$robot1->suara. " dengan berat ".$robot1->berat;


?>