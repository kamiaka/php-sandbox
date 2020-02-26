#!/usr/bin/php
<?php

function main() {
  $code = run();

  exit ($code ? $code : 0);
}

function run() {
  $argv = array_slice($_SERVER['argv'], 1);
  $opts = getopt('hda:');

  if (isset($opts['h'])) {
    return showHelp();
  }

  var_dump($opts);
  var_dump($argv);


  showHelp();

  return 1;
}

function showHelp() {
  echo <<<EOT
Usage: command.php [options]

  -a <domain> : Add domain
  -d <domain> : Delete domain
  -
  
command -d example.com
EOT;
  return 0;
}

main();