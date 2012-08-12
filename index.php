<?php

function parseDirectory($directory)
{
  $dir = $directory;
  $files = scandir($dir);
  $template_files = '';

  foreach ($files as $file)
  {
    if ($file !== '.' && $file !== '..') {
      $filename = str_replace('.php', '', ucwords($file));
      $template_files .= '<li><a href="/templates/' . $file . '">' . $filename . '</a></li>';
    }
  }

  include $_SERVER['DOCUMENT_ROOT'] . 'views/template-index.php';
}

parseDirectory('templates');