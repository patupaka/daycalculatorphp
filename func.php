<?php

  $datumJetzt = date("d.m.Y");
  $datumGeburt = "";

  function rechnenDays($datumJetzt, $datumGeburt)
  {
    // calulating the difference in timestamps 
    $diff = strtotime($datumGeburt) - strtotime($datumJetzt);
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds
    return ceil(abs($diff / 86400));
  }