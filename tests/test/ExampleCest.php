<?php


class ExampleCest
{
    public function _before(TestTester $I)
    {
    }

    public function _after(TestTester $I)
    {
    }

    // tests
    public function tryToTest( TestTester $I)
    {
      $I->amOnPage('/my/-/login/');
      $I->appendField('//*[@id="login_id"]', $I->getConfig('username'));
      $I->appendField('//*[@id="password"]', $I->getConfig('password'));
      $I->makeScreenshot('login-page');
    }
}
