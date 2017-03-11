<?php


class ExampleCest
{
    public function _before(TestTester $I)
    {
    }

    public function _after(TestTester $I)
    {
    }

    /**
     * @group hi
     **/
    public function hiTest( TestTester $I)
    {
      $I->amOnPage('/my/-/login/');
      $I->appendField('//*[@id="login_id"]', $I->getConfig('username'));
      $I->appendField('//*[@id="password"]', $I->getConfig('password'));
      $I->makeScreenshot('login-page');
    }
    
    /**
     * @group bye
     **/
    public function byeTest( TestTester $I)
    {
      $I->amOnPage('my/-/email-application/');
      $I->makeScreenshot('email-application-page');
    }
}
