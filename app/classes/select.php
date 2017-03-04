<?php
namespace app\classes;

class select {
  public $selecthtml;
  private $properties;
  private $title;
  private $selected;

  public function create_properties($properties){ // array is sent ex. 'class' => 'myclass', 'id'=>'idobject' ...
    foreach ($properties as $key => $value) {
      if ($key == 'title') {$this->title = $value; continue;};
      if ($key == 'selected') {$this->selected = $value; continue;};
      $this->properties .= " $key=\"$value\" ";
    }
  }

  public function add_data($data){
    $this->selecthtml .= " <option value=\"0\">$this->title </option>"."\n";
    foreach ($data as $key => $value) {
      if ($key == $this->selected) {$selected = "selected";} else {$selected = '';}
      $this->selecthtml .= " <option value=\"".$key."\" $selected> ".$value." </option>"."\n";
    }
  }

  public function create_select($data, $properties){
    if (isset($properties)) {
      $this->create_properties($properties);
    }
    $this->selecthtml .= "<select $this->properties>"."\n";
    $this->add_data($data);
    $this->selecthtml .= "</select>";
    return $this->selecthtml;
  }
}

?>
