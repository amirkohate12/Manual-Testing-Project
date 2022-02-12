Feature: Palindrome Test Cases
As an QA Enigneer
I want to test the string palindrome function
So that I can verify that it is working fine

Background: Rre-Requisite are up and running
	Given XAMPP server is installed
	And APACHE service is running
	And MySQL service is ruuning
	And Browser is opened
	And User is on the URL "http://localhost/palindrome.php"

@ui_web @positive @priority_high
Scenario: Verify that the string is palindrome
	When User enters any palindrome string in the text box
	And User clicks Submit button
	Then User should see a message "Congratulations! Your String Is A Palindrome"

@ui_web @negative @priority_high
Scenario: Verify that the string is not palindrome
	When User enters any non-palindrome string in the text box
	And User clicks Submit button
	Then User should see a message "Alas! Your String Is Not A Palindrome"

@ui_web @negative @priority_high
Scenario: Verify that error message is shown if no string is entered
	When User does not enter any string in the text box
	And User clicks Submit button
	Then User should see a message "Enter A String"	