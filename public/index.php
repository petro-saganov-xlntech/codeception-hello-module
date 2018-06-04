<?php

echo "<h2>Release v31</h2>\n";

echo "Below there are environment variables:\n";
echo "<pre>\n";
print_r($_ENV);
echo "</pre>\n";

$basedir = dirname(__DIR__);
$config_file = $basedir . '/config/config.ini';
$routes_file = $basedir . '/config/routes.txt';
$postdeploy_file = $basedir . '/postdeploy/postdeploy.txt';
if (is_readable($config_file)){
  $config = file_get_contents($config_file);
  echo "<h3>File: $config_file</h3>\n";
  echo "<pre>$config</pre>\n";
} else {
  echo "<h3>[Error]: Config not found. File: $config_file</h3>\n";
}
if (is_readable($routes_file)){
  $routes = file_get_contents($routes_file);
  echo "<h3>File: $routes_file</h3>\n";
  echo "<pre>$routes</pre>\n";
} else {
  echo "<h3>[Error]: Routes not found. File: $routes_file</h3>\n";
}
if (is_readable($postdeploy_file)){
  $postdeploy = file_get_contents($postdeploy_file);
  echo "<h3>File: $postdeploy_file</h3>\n";
  echo "<pre>$postdeploy</pre>\n";
} else {
  echo "<h3>[Error]: Postdeploy not found. File: $postdeploy_file</h3>\n";
}
