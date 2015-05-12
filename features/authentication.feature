Feature: Membership
  In order to provide access to member content
  As the application owner
  I want to allow Authentication and Registration for Users

  Scenario: Registration
    When I register "JohnDoe" "john@example.com"
    Then I should have an account

  Scenario: Successful Authentication
    Given I have an account "JohnDoe" "john@example.com"
    When I sign in
    Then I should be logged in

  Scenario: Failed Authentication
    Given I am on "auth/login"
    When I sign in with invalid credentials
    Then I should not be logged in

  Scenario: Logout should redirect to homepage
    Given I sign in with invalid credentials
    When I go to "auth/logout"
    Then I should not be logged in
    And I should be on the homepage