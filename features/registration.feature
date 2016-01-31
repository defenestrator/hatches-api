Feature: Registration process with email validation
  In order to confirm user identity
  As the site owner
  I want to verify ownership of email accounts

  Scenario: Send verification email
    Given I register "JohnDoe" "john@example.com"
    When the registration is submitted
    Then a welcome email is sent to the new user

  Scenario: Validate receipt of verification email
    Given the user has received the verificaiton email
      And one hour has not expired
    When the verification link is opened
    Then the user email is validated