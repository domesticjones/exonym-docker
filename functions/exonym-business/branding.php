<?php
  if (!defined('WPINC')) { die; }

  // Business Name
  function ex_brand($type = 'name') {
    if ($type == 'name') {
      get_field('business_name', 'options');
    } elseif ($type == 'legal') {
      get_field('legal_name', 'options');
    }
  }

  // Logo
  function ex_logo($style = 'primary', $color = 'full_color', $size = 'large') {
    $logoTable = get_field('logo', 'options');
    $logoChosen = $logoTable[$style][$color];
    $logo = $logoChosen['sizes'][$size];
    return $logo;
  }
