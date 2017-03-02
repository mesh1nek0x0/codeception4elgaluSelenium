<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class ConfigHelper extends \Codeception\Module
{
  public function getConfig($key)
    {
      var_dump($this->config);exit;
        if (isset($this->config[$key])) {
            return $this->config[$key];
        } else {
            return null;
        }
    }
}
