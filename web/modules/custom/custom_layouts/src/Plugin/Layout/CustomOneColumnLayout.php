<?php

namespace Drupal\custom_layouts\Plugin\Layout;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Layout\LayoutDefault;

/**
 * Configurable one column layout plugin class.
 *
 * @internal
 *   Plugin classes are internal.
 */
class CustomOneColumnLayout extends LayoutDefault {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $configuration = parent::defaultConfiguration();
    return $configuration + [
        'container_width' => $this->getDefaultContainerWidth(),
        'class' => '',
      ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['container_width'] = [
      '#type' => 'select',
      '#title' => $this->t('Layout container width'),
      '#default_value' => $this->configuration['container_width'],
      '#options' => $this->getContainerWidthOptions(),
      '#description' => $this->t('Choose the width for this layout container.'),
    ];

    $form['class'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Custom Class'),
      '#description' => $this->t('Enter custom css classes for this row. Separate multiple classes by a space and do not include a period.'),
      '#default_value' => $this->configuration['class'],
      '#attributes' => [
        'placeholder' => 'class-one class-two',
      ],
    ];

    return parent::buildConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['container_width'] = $form_state->getValue('container_width');
    $this->configuration['class'] = $form_state->getValue('class');
  }

  /**
   * {@inheritdoc}
   */
  public function build(array $regions) {
    $build = parent::build($regions);
    $build['#attributes']['class'] = [
      'layout',
      $this->getPluginDefinition()->getTemplate(),
      $this->configuration['container_width'],
      $this->configuration['class'],
    ];
    return $build;
  }

  /**
   * Get the container width options.
   *
   * @return array
   *   The container width options.
   */
  protected function getContainerWidthOptions(): array {
    return [
      'browser-width' => 'browser-width',
      'page-width' => 'page-width',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getDefaultContainerWidth() {
    return 'browser-width';
  }

}
