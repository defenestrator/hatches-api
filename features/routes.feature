Feature: Test that basic app pages are being served
    In order to verify the app is working as expected
    As the app owner
    I want to verify the web pages load correctly

  Scenario: Home Page
    Given I am on the homepage
    Then I should see "Hatch.es"

  Scenario: Registration page
    Given I am on "auth/register"
    Then I should see "Register"

  Scenario: Login page
    Given I am on "auth/login"
    Then I should see "Login"
    And I should be on "auth/login"

  Scenario: Login required for "v1" page
    Given I am on "v1"
    Then I should see "Login"
    And I should be on "auth/login"

  Scenario: Login required for "main" page
    Given I am on "main"
    Then I should see "Login"
    And I should be on "auth/login"