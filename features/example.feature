Feature: Test that basic app pages are being served
    In order to verify the app is working as expected
    As the app owner
    I want to verify the web pages load correctly

  Scenario: Home Page
    Given I am on the homepage
    Then I should see "Hatch.es"

  Scenario: Login required for "v1" page
    Given I am on "v1"
    Then I should see "Login"
    And I should be on "auth/login"