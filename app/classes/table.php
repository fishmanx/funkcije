<?php
namespace app\classes;

class table {

  public $tablehtml; // finished table to be displayed
  private $properties; // table properties like class id width ...

  public function create_thead($header){ // creating thead part of table
    $this->tablehtml .= " <thead>"."\n";
    $this->tablehtml .= "   <tr>"."\n";
    foreach($header as $title) {
      $this->tablehtml .= "     <th>".$title."</th>"."\n";
    }
    $this->tablehtml .= "   </tr>"."\n";
    $this->tablehtml .= " </thead>"."\n";
  }

  public function create_tbody($data){ // creating tbody part of table
    $this->tablehtml .= " <tbody>"."\n";
    foreach ($data as $row) { // loops through all rows
      $this->tablehtml .= "  <tr>"."\n";
          foreach($row as $key=>$value) { // loops through all columns of a row
          $this->tablehtml .= "     <td>".$value."</td>"."\n"; // adds a value to a column in a row
        }
      $this->tablehtml .="  </tr>"."\n";
    } // end foreach
    $this->tablehtml .= " </tbody>"."\n";
  }

  public function create_properties($properties){ // array is sent ex. 'class' => 'myclass', 'id'=>'idtable' ...
    foreach ($properties as $key => $value) {
      $this->properties .= " $key=\"$value\" ";
    }
  }

  public function create_table($header, $data, $properties){
    if (isset($properties)) {$this->create_properties($properties);}
    $this->tablehtml = "<table ".$this->properties.">"."\n";
      $this->create_thead($header);
      $this->create_tbody($data);
    $this->tablehtml .= "</table>"."\n";
    return $this->tablehtml;
  }
}
// komentar
// novi komentar new branch
?>
