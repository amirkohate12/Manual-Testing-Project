<?php //PHP starting tag
$entered_array = array(); //Initializing array for saving input numbers
$array_length = 5; //Length of array

echo("<form method='POST'>"); //Starting tag of HTMl form
for ($x = 0; $x < $array_length; $x++){ //Loop for creating multiple input text boxes
  echo("<input type='text' name='txt$x' placeholder='Enter The Number'/>"); //Input for text boxes for getting the string from user
}
echo("<input type='submit' value='Submit' name='submit'/>"); //Input for submit button which will show result once clicked
echo("</form>"); //Ending tag of HTML form

$entered_array = array($array_length); //Assigning array the length

if(isset($_POST['submit'])){ //ISSET fucntion is used to get the data from HTML form based on name provided
  for ($y = 0; $y < $array_length; $y++){ //Lopp for getting data from all text boxes
    (int)$entered_array[$y] = (int)$_POST['txt'.$y]; //This will save the data of all text boxes in the array one by one based on the text boxes names
  }
  
  $all_zeros = false; //Boolean variable to check if user enters all zeroes
  $all_zeros_increment = 0; //Variable to save the count of zeroes
  foreach($entered_array as $value){ //Getting all elements of array one by one
    if(empty($entered_array) or $value == '0'){ //Checking if array is empty of has a zero
      $all_zeros = true; //Setting all zeroes value true if element is 0
      $all_zeros_increment = $all_zeros_increment + 1; //Incrementing all zeros counter
    }
  }

  if($all_zeros == true and $all_zeros_increment == sizeof($entered_array)){ //Condiiton to check if all zeros flag is true and all zeores counter has same number as length of array
    echo("Please Enter Atleast 1 Non-Zero Number"); //This message will be shown if all zeroes or no value was entered by user
  }
  else{
    isMultiplier($entered_array); //This will call the isMultiplier function
  }
}

function isMultiplier(array $actual_array){
  $multiplier_numbers = array(); //Initializing array

  echo ("Original Array: "."<br>"); //Displaying text on the page
  foreach($actual_array as $original_number){ //Loop for displaying array elemnets one by one
    echo ($original_number."<br>"); //Displaying text on the page
  }

  for ($x = 0; $x < sizeof($actual_array); $x++) //Accessing each elemnt of array one by one
  {
    if($actual_array[$x] !=0 and ($actual_array[$x]%4 == 0 or $actual_array[$x]%6 == 0)){ //Checking if number is a multiplier of 4, 6 or 4 and 6.
      array_push($multiplier_numbers, $actual_array[$x]); //Pushing the number in the mutliplier array if it is multiplier of 4,6, or 4 and 6
    }
  }

  echo("<br>"."Multiplier Array: "."<br>");  //Displaying text on the page

  foreach($multiplier_numbers as $number){//Loop for displaying array elemnets one by one
    echo ($number."<br>");  //Displaying text on the page
  }
}
//PHP ending tag ?>
