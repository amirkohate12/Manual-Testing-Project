<?php //PHP starting tag

echo("<form method='POST'>"); //Starting tag of HTMl form
echo("<input type='text' name='palindrome_string' placeholder='Enter The String'/>"); //Input for text box for getting the string from user
echo("<input type='submit' value='Submit' name='submit'>"); //Input for submit button which will show result once clicked
echo("</form>"); //Ending tag of HTML form

$entered_string = ""; //Variable for saving the string entered by user

if(isset($_POST['submit'])){ //ISSET fucntion is used to get the data from HTML form based on name provided
  $entered_string = $_POST['palindrome_string']; //This will get the data from the text box and will save it in the variable
  if ($entered_string == ""){ //condition to check if user entered any string or not
    echo("Enter A String."); //Displaying message that a string should be entered
  }
  else{
    isPalindrome($entered_string); //if user entered any string this will call the IsPalindrome fucntion to check if string is a palindrome or not
  }
}

function isPalindrome($actual_string){
  if (strrev($actual_string) == $actual_string){ //check if the string and the reverse string is a match. This is case sensitive
    echo("Congratulations! Your String Is A Palindrome"); //If string is a palindrome this message will be shown
  }
  else{
    echo("Alas! Your String Is Not A Palindrome"); //If string is not a palindrome then this message will be shown
  }
}

//PHP ending tag ?>
