<?php

class File
{
  public function __construct()
  {
    mkdir(__DIR__ . '/test');
    touch(__DIR__ . '/test/高&执&行&力&的&打&造.txt');
  }

  public function __destruct()
  {
    unlink(__DIR__ . '/test/高&执&行&力&的&打&造.txt');
    rmdir(__DIR__ . '/test');
  }

  public function listFiles()
  {
    $files = array();
    $d = dir(__DIR__ . '/test');
    while (($entry = $d->read()) !== false) {
      if ($entry == '.' || $entry == '..') {
        continue;
      }
      $files[] = $entry;
    }
    return $files;
  }
}
