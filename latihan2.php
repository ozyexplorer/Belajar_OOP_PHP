<?php 


	//class nama_variabel
	class robot {

		//ini disebut dengan property / variabel yang berada di dalam class
		public $suara = "alhamdulillah";
		public $berat = 30;

		//ini disebut dengan method / sama dengan fungsi di dalam class
		public function bersuara(){
			echo "suara robotnya ".$this->suara;
		}

		public function beratnya(){
			//return mengembalikan nilai string ke fungsi beratnya
			return " dengan beratnya ".$this->berat;
		}
	}

	//untuk memanggil class --> nama_variabel = new nama_variabel_class;
	$robot1 = new robot();

	$robot1 -> bersuara();
	echo $robot1 -> beratnya();
	


?>