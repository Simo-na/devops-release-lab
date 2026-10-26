<?php

$appName = "DevOps Release Lab";
$environment = "Development";

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>" . $appName . "</title>";
echo "</head>";
echo "<body>";
echo "<h1>" . $appName . "</h1>";
echo "<p>Application status: Running</p>";
echo "<p>Environment: " . $environment . "</p>";
echo "<p>Managed through Git, Docker, and CI/CD.</p>";
echo "</body>";
echo "</html>";
this is surely broken
