Feature: Membership
  In order to provide access to member content
  As an Administrator
  Authentication and Registration for Users

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