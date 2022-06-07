<?php
class mahasiswa_model extends CI_model{
    public $id;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75)?"Cumlaude":"baik";
        return $predikat;
    }

}


?>