<?php

namespace Drupal\samplemodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class SampleController extends ControllerBase {

  public function mainPage() {
    $build = array(
      "#type" => "markup",
      "#markup" => t("Hello World, made with love with Drupal 8")
    );
    return $build;
  }

}