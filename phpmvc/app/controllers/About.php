<?php
class About extends Controller
{
  public function index($name = 'ade fathi',$pekerjaan = 'web developer')
  {

  $data['judul'] = 'About me';
  $data['name'] = $name;
  $data['pekerjaan'] = $pekerjaan;
   $this->view('templates/header',$data);
   $this->view('about/index',$data);
   $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'pages';
    $this->view('templates/header',$data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
