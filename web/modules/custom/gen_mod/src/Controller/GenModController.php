<?php

namespace Drupal\gen_mod\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class GenModController.
 */
class GenModController {

  /**
   * Spitting.
   *
   * @return string
   *   Return Hello string.
   */
  public function spitting() {
    return new Response('Output by the gen_mod module!');
  }

}
