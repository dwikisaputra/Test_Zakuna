<?php
class Zakuna
{
  Public $a;
  Public $b;

  public function A($a)
  {
    return $a;
  }
   public function B($b)
  {
    return $b;
  }

  public function Form()
  {
    echo '<form method="POST">';
    echo '<table>';
        echo '<tr>';
            echo '<td> Variabel A </td>';
            echo '<td> <input type="text" name="a"> &nbsp; </td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td> Variabel B </td>';
            echo '<td> <input type="text" name="b"> &nbsp; </td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td> <input type="submit" value="Lanjut"> </td>';
        echo '</tr>';
    echo '</table>';
    echo '</form>';
  }
}

$data = new Zakuna();
$data->Form();


if ($_POST) {
  $a = $_POST['a'];
  $b = $_POST['b'];
      echo "Soal";
      echo "<br/>";
      echo "a= ".$a;  
      echo "<br/>";
      echo "b= ".$b;
      echo "<br/>";
      echo "Jawaban";
      echo "<br/>";
      echo "a= ".$data->B($b);   
      echo "</br>"; 
      echo "b= ".$data->A($a);
}
?>