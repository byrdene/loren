<?php

namespace Drupal\custom_layouts\Plugin\Layout;

/**
 * Configurable two column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class CustomTwoColumnLayout extends MultiWidthLayoutBase {

  /**
   * {@inheritdoc}
   */
  protected function getWidthOptions() {
    return [
      '50-50' => '50%/50%',
      '33-67' => '33%/67%',
      '67-33' => '67%/33%',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultWidth() {
    return '50-50';
  }

}
