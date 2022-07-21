<?php

if (!function_exists('userAdmin')) {
    function userAdmin($user) {
        if ($user->role == 0) {
          return true;
      }
      // return false;
  }
}

if (!function_exists('Doctor')) {
    function Doctor($user) {
        if ($user->role == 1) {
          return true;
      }
      return false;
  }
}

if (!function_exists('Nurse')) {
    function Nurse($user) {
        if ($user->role == 2) {
          return true;
      }
      return false;
  }
}
