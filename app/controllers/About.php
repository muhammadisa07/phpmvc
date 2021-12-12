<?php  

class About extends Controller{
    public function index($nama = "Muhammad Isa", $profesi = "Mahasiswa" , $umur = 19){
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;
        $this->view('templates/header' ,$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = "My Pages";
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
        
}