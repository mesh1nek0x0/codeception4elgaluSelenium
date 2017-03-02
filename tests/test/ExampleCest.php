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
      $I->appendField('//*[@id="login_id"]', 'mesh1neko');
      $I->appendField('//*[@id="password"]', 'pass');
      $I->makeScreenshot('login-page');
    }
}
