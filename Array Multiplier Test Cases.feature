Feature: Array Multiplier Test Cases
As an QA Enigneer
I want to test the array multiplier function
So that I can verify that it is working fine for the numbers multiplier of 4 or 6

Background: Rre-Requisite are up and running
	Given XAMPP server is installed
	And APACHE service is running
	And MySQL service is ruuning
	And Browser is opened
	And User is on the URL "http://localhost/array.php"

@ui_web @positive @priority_high
Scenario: Verify that the multiplier array is not empty when number is multiplier of 4 or 6 
	When User enters the numbers which are multiplier of 4 or 6 in the text boxes
	And User clicks Submit button
	Then User should see a those number in the multiplier array that are multiplier of 4 or 6

@ui_web @negative @priority_high
Scenario: Verify that the multiplier array is empty when number is not a multiplier of 4 or 6 
	When User enters the numbers which are not multiplier of 4 or 6 in the text boxes
	And User clicks Submit button
	Then User should see an empty multiplier array

@ui_web @negative @priority_high
Scenario: Verify that error message if shown if no numbers are entered
	When User does not enter the numbers in the text boxes
	And User clicks Submit button
	Then User should see error message "Please Enter Atleast 1 Non-Zero Number"

@ui_web @negative @priority_high
Scenario: Verify that error message if shown if all zeroes are entered
	When User enters all zeroes in the text boxes
	And User clicks Submit button
	Then User should see error message "Please Enter Atleast 1 Non-Zero Number"