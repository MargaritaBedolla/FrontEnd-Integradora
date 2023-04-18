<?php

/**
*
*/
class ViewsManager
{

  private $head;
  private $fileName;

  function __construct()
  {
    $this->head = new Head();
  }

  function setFileName($fileName) {

    $this->fileName = $fileName;
    if($fileName == "login.php") {
      $this->generateBody();
    } else if($fileName == "historia.component.php"){
      $this->generateAdminBody();
    }

  }

  function generateBody(){
    echo '<body></body>';
    include './views/' . $this->fileName;

  }

  function generateAdminBody() {

    include './views/' . $this->fileName;

  }

  # 2. Crear método con nombre loadNombreDeVista
    // Asignar el título del encabezado
    // Asignar el nombre de la vista

  function loadLogin(){
    $this->head->setTitle("Inicio de sesión");
    $this->setFileName("login.php");
  }

  function loadHistorial(){
    $this->head->setTitle("Historial");
    $this->setFileName("historial.component.php");
  }

  function loadCoaching(){
    $this->head->setTitle("Consultoria");
    $this->setFileName("coaching.php");
  }

  function loadCompany(){
    $this->head->setTitle("Empresa");
    $this->setFileName("company.php");
  }

  function loadComponents(){
    $this->head->setTitle("Components");
    $this->setFileName("components.php");
  }

  function loadContact(){
    $this->head->setTitle("Contacto");
    $this->setFileName("contact.php");
  }

  function loadDesign(){
    $this->head->setTitle("Diseño");
    $this->setFileName("design.php");
  }

  function loadDevelopment(){
    $this->head->setTitle("Desarrollo");
    $this->setFileName("development.php");
  }

  function loadOrders(){
    $this->head->setTitle("Pedidos");
    $this->setFileName("orders.php");
  }

  function loadServices(){
    $this->head->setTitle("Servicios");
    $this->setFileName("serviceslist.php");
  }

  function loadStock(){
    $this->head->setTitle("Stock");
    $this->setFileName("stock.php");
  }

  function loadSupport(){
    $this->head->setTitle("Soporte Tecnico");
    $this->setFileName("support.php");
  }

}
?>
