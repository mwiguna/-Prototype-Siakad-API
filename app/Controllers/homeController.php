<?php

class homeController extends Controller {
  
  public function getStudent($nim){
  	$nim = Security::decrypt($nim);

    $mahasiswa = $this->Model('Mahasiswa')->select()->where('nim', $nim)->execute();

    echo json_encode($mahasiswa);
  }

  public function getMembers($nim_members){
  	$nim_members = Security::decrypt($nim_members);

  	$members     = $this->model('Mahasiswa')->raw("SELECT * FROM mahasiswa WHERE nim IN ({$nim_members})");
  	
  	echo json_encode($members);
  }

  
}