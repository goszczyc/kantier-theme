<?php

/*************** IMAGE SIZES ***************/
if (function_exists('add_image_size')) {
  add_image_size('standard', 1280, 720, false);
  add_image_size('banner-image', 1440, 810, false);
  add_image_size('card-bg', 600, 640, false);
  add_image_size('card-thumb', 330, 250, false);
  add_image_size('firm-logo', 450, 450, false);
  add_image_size('team-member', 260, 260, true);
  add_image_size('text-img', 1280, 1280, true);
  add_image_size('realization-image', 1410, 658, true);
}
