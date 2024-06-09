<?php
class Views{
  public function getView($vista, $data=""){
    require "Vistas/" . $vista . ".php";
    }
  }
?>
