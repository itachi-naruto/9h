<?php declare(strict_types = 1);

namespace MailPoet\EmailEditor\Engine\Renderer;

if (!defined('ABSPATH')) exit;


use MailPoet\EmailEditor\Engine\StylesController;

interface BlockRenderer {
  public function render(array $parsedBlock, BlocksRenderer $blocksRenderer, StylesController $stylesController): string;
}
