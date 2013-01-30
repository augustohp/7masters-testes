<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use \Exception;
use Phpsp\Greeting;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    protected $hello;
    protected $who;

    /**
     * @Given /^a class that does greetings$/
     */
    public function aClassThatDoesGreetings()
    {
        $this->hello = new Greeting;
    }

    /**
     * @When /^we greet "([^"]*)"$/
     */
    public function weGreet($someone)
    {
        $this->who = $someone;
    }

    /**
     * @Then /^the resulting greeting should be "([^"]*)"$/
     */
    public function theResultingGreetingShouldBe($expected)
    {
        $result = $this->hello->someone($this->who);
        if (0 !== strcmp($expected, $result))
            throw new Exception('Wrong greeting received: '.$result);
    }
}
