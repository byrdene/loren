<?php

namespace Drupal\custom_paragraphs\Form;

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Entity\Exception\FieldStorageDefinitionUpdateForbiddenException;

/**
 * Provides form for managing module settings.
 */
class CustomParagraphsSettingsForm extends ConfigFormBase {

  /**
   * Get the form ID.
   */
  public function getFormId() {
    return 'custom_paragraphs_styles';
  }

  /**
   * Get the editable config names.
   */
  protected function getEditableConfigNames() {
    return ['custom_paragraphs.settings'];
  }

  /**
   * Build the form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('custom_paragraphs.settings');
    $form['settings']['layout_bgcolor'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('layout_bgcolor'),
      '#title' => $this->t('Background color options for layouts'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    $form['settings']['component_bgcolor'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('component_bgcolor'),
      '#title' => $this->t('Background color options for components'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    $form['settings']['layout_width'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('layout_width'),
      '#title' => $this->t('Width options for Layouts'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    $form['settings']['component_width'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('component_width'),
      '#title' => $this->t('Width options for Components'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    $form['settings']['layout_fx'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('layout_fx'),
      '#title' => $this->t('Scrolling options for Layout Scrolling FX'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    $form['settings']['component_fx'] = [
      '#type' => 'textarea',
      '#default_value' => $config->get('component_fx'),
      '#title' => $this->t('Scrolling options for Component Scrolling FX'),
      '#description' => $this->t('<p>Enter one value per line, in the format <strong>key|label</strong> where key is the CSS class name (without the .), and label is the human readable name of the style in administration forms.</p>'),
      '#cols' => 60,
      '#rows' => 8,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * Submit Form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    try {
      // Update the Layout BGColors values.
      $newLayoutBGColorValues = self::optionsExtractAllowedListTextValues($form_state->getValue('layout_bgcolor'));
      $fieldStorageLayoutBGColors = FieldStorageConfig::loadByName('paragraph', 'field_layout_bgcolor');
      $fieldStorageLayoutBGColors->setSetting('allowed_values', $newLayoutBGColorValues);
      $fieldStorageLayoutBGColors->save();
      // Update the Component BGColors values.
      $newComponentBGColorValues = self::optionsExtractAllowedListTextValues($form_state->getValue('component_bgcolor'));
      $fieldStorageComponentBGColors = FieldStorageConfig::loadByName('paragraph', 'field_component_bgcolor');
      $fieldStorageComponentBGColors->setSetting('allowed_values', $newComponentBGColorValues);
      $fieldStorageComponentBGColors->save();
      // Update the Layout Width values.
      $newLayoutWidthValues = self::optionsExtractAllowedListTextValues($form_state->getValue('layout_width'));
      $fieldStorageLayoutWidth = FieldStorageConfig::loadByName('paragraph', 'field_layout_width');
      $fieldStorageLayoutWidth->setSetting('allowed_values', $newLayoutWidthValues);
      $fieldStorageLayoutWidth->save();
      // Update the Component Width values.
      $newComponentWidthValues = self::optionsExtractAllowedListTextValues($form_state->getValue('component_width'));
      $fieldStorageComponentWidth = FieldStorageConfig::loadByName('paragraph', 'field_component_width');
      $fieldStorageComponentWidth->setSetting('allowed_values', $newComponentWidthValues);
      $fieldStorageComponentWidth->save();
      // Update the Layout FX values.
      $newLayoutFXValues = self::optionsExtractAllowedListTextValues($form_state->getValue('layout_fx'));
      $fieldStorageLayoutFX = FieldStorageConfig::loadByName('paragraph', 'field_layout_fx');
      $fieldStorageLayoutFX->setSetting('allowed_values', $newLayoutFXValues);
      $fieldStorageLayoutFX->save();
      // Update the Component FX values.
      $newComponentFXValues = self::optionsExtractAllowedListTextValues($form_state->getValue('component_fx'));
      $fieldStorageComponentFXWidth = FieldStorageConfig::loadByName('paragraph', 'field_component_fx');
      $fieldStorageComponentFXWidth->setSetting('allowed_values', $newComponentFXValues);
      $fieldStorageComponentFXWidth->save();
    }
    catch (FieldStorageDefinitionUpdateForbiddenException $e) {
      $this->messenger()->addError($e->getMessage());
      $form_state->setRebuild();
      return;
    }
    catch (Exception $e) {
      $this->messenger()->addError($e->getMessage());
      $form_state->setRebuild();
      return;
    }

    $config = $this->config('custom_paragraphs.settings');
    $config->set('layout_bgcolor', $form_state->getValue('layout_bgcolor'));
    $config->set('component_bgcolor', $form_state->getValue('component_bgcolor'));
    $config->set('layout_width', $form_state->getValue('layout_width'));
    $config->set('component_width', $form_state->getValue('component_width'));
    $config->set('layout_fx', $form_state->getValue('layout_fx'));
    $config->set('component_fx', $form_state->getValue('component_fx'));
    $config->save();

    parent::submitForm($form, $form_state);
  }

  /**
   * Parses a string of 'allowed values' into an array.
   *
   * @param string $string
   *   The list of allowed values in string format described in
   *   optionsExtractAllowedValues().
   *
   * @return array
   *   The array of extracted key/value pairs, or NULL if the string is invalid.
   *
   * @see optionsExtractAllowedListTextValues()
   */
  public function optionsExtractAllowedListTextValues($string) {
    $values = [];

    $list = explode("\n", $string);
    $list = array_map('trim', $list);
    $list = array_filter($list, 'strlen');

    foreach ($list as $text) {
      $value = $key = FALSE;

      // Check for an explicit key.
      $matches = [];
      if (preg_match('/(.*)\|(.*)/', $text, $matches)) {
        // Trim key and value to avoid unwanted spaces issues.
        $key = trim($matches[1]);
        $value = trim($matches[2]);
        $values[$key] = $value;
      }
      else {
        return NULL;
      }
    }

    return $values;
  }

}
