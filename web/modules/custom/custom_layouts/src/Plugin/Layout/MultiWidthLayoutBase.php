<?php

namespace Drupal\custom_layouts\Plugin\Layout;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Layout\LayoutDefault;
use Drupal\Core\Plugin\PluginFormInterface;
use Drupal\custom_layouts\CustomLayouts;

/**
 * Base class of layouts with configurable widths.
 *
 * @internal
 *   Plugin classes are internal.
 */
abstract class MultiWidthLayoutBase extends LayoutDefault implements PluginFormInterface {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $configuration = parent::defaultConfiguration();
    return $configuration + [
      'container_width' => $this->getDefaultContainerWidth(),
      'column_widths' => $this->getDefaultWidth(),
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
    $form['column_widths'] = [
      '#type' => 'select',
      '#title' => $this->t('Column widths'),
      '#default_value' => $this->configuration['column_widths'],
      '#options' => $this->getWidthOptions(),
      '#description' => $this->t('Choose the column widths for this layout.'),
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
    $this->configuration['column_widths'] = $form_state->getValue('column_widths');
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
      $this->configuration['column_widths'],
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

  /**
   * Gets the width options for the configuration form.
   *
   * The first option will be used as the default 'column_widths' configuration
   * value.
   *
   * @return string[]
   *   The width options array where the keys are strings that will be added to
   *   the CSS classes and the values are the human readable labels.
   */
  abstract protected function getWidthOptions();

  /**
   * Provides a default value for the width options.
   *
   * @return string
   *   A key from the array returned by ::getWidthOptions().
   */
  protected function getDefaultWidth() {
    // Return the first available key from the list of options.
    $width_classes = array_keys($this->getWidthOptions());
    return array_shift($width_classes);
  }

}
