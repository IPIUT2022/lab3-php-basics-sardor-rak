<h4>q1</h4>
<?php
  $color = array('white', 'green', 'red');
?>

<ul>
  <li><?php echo $color[0]; ?></li>
  <li><?php echo $color[1]; ?></li>
  <li><?php echo $color[2]; ?></li>
</ul>

<ul>

<?php
  foreach($color as $color) {
    echo "<li>".$color."</li>";
  };
?>
</ul>

<ul>


<?php foreach($color as $color): ?>
  <li><?php echo $color; ?></li>
<?php endforeach; ?>
</ul>

<br>
<h4>q2</h4>
<?php
  $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
  foreach($ceu as $key=>$value){
    echo "<li> The capital of ".$key." is ".$value."  </li>" ;    
  }
?>

<br>
<h4>q4</h4>
<?php
  $var = array("Color"=>"Red", "Name"=>"Maftuna", "Age"=>"21", "Id"=>"U555777");
  
  foreach($var as $key=>$value){
    echo "<li> ".$key." is ".$value."  </li>" ;    
  }
?>

<br>
<h4>q4</h4>
<?php
  $input = array(1,2,3,4,5);
  array_splice($input, -1, 2, array("$",4,5));
  var_dump($input);
?>