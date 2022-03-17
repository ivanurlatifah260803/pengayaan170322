<?php

class App{
  public function_construct()
  {
    $url = $this->parseURL();
    var_dump($url);
  }

  class App{
    protected $controller ='portofolio'; //controller default
    protected $method     ='index'; //method default
    protected $params     ='[]'; //parameter jika ada

    public function_constructor()
  }
  $url = $this->parseURL();

  //pemanggilan controller
  if (file_exist('../admin/controllers/'.$url[0]'..php')){
    $this->controller = $url[0];
    unset($url[0]);
  }
  require_once '../admin/controllers/'.$this->controller'..php';
  $this->controller = new $this->controller;

  //pemanggilan method
  if (asset($url[1])) {
    if (method_exist($this->controller, $url[1])) {
      $this->method = $url[1];
      unset($url[1]);
    }
  }

  //parameters
  if (!empty($url)) {
    $this->params = array_values($url);
  }

  //jalankan controller & method, serta kirim parameter jika ada
  call_usse_fanc_array([$this->controller,$this->method],$this->params);
}

  public function parseURL(){
  {
    //menghilangkan garis miring(/) diakhir url 
    $url = rtrim($GET['url'],'/');

    //menghilangkan karakter aneh atau karakter yang memungkinkan kita di hack
    $url = filter_var($url,FILTER_SANITIZE_URL);

    //menghilangkan tanda garis miring(/) dan mengambil string-nya.
    $url = explode('/',$url);
    return $url;
  }
}

}