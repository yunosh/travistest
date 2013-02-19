<?php

class File
{
  public function __construct()
  {
    mkdir(dirname(__FILE__) . '/test');
    touch(dirname(__FILE__) . '/test/高&执&行&力&的&打&造.txt');
  }

  public function __destruct()
  {
    unlink(dirname(__FILE__) . '/test/高&执&行&力&的&打&造.txt');
    rmdir(dirname(__FILE__) . '/test');
  }

  public function listFiles()
  {
    $files = array();
    $d = dir(dirname(__FILE__) . '/test');
    while (($entry = $d->read()) !== false) {
      if ($entry == '.' || $entry == '..') {
        continue;
      }
      $files[] = $entry;
    }
    return $files;
  }
}
