<?php

class homeController extends Controller {
  
  public function getStudent($nim, $privacy){
  	$nim = Security::decrypt($nim);

    if($privacy == 1) $data = ['*'];
    else $data = ['nim', 'nama', 'prodi', 'fakultas'];
    $mahasiswa = $this->Model('Mahasiswa')->select($data)->where('nim', $nim)->execute();
    
    echo json_encode($mahasiswa);
  }

  public function getMembers($nim_members, $privacy){
  	$nim_members = Security::decrypt($nim_members);

    if($privacy == 1) $data = "*";
    else $data = "nim, nama, prodi, fakultas";
  	$members   = $this->model('Mahasiswa')->raw("SELECT {$data} FROM mahasiswa WHERE nim IN ({$nim_members})");
  	
    echo json_encode($members);
  }

  
}