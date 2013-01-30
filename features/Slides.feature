Feature: Talk about tests with PHP on 7 masters at iMasters
    To have a general overview of tests
    As a PHP developer trying to develop better applications
    We need to take a pick on what we have today

Scenario: Our first behat test
    Given a class that does greetings
    When we greet "7masters"
    Then the resulting greeting should be "Hello 7masters!"