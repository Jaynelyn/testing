<?php

namespace Drupal\Tests\search_config\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Search Config Form test.
 *
 * @group search_config
 */
class SearchConfigFormTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['node', 'search', 'search_config'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * To check the presence of configuration fields, field label configuration and the data entry to the fields.
   */
  public function testSearchConfigForm() {
    // Create a new admin user to manage search settings.
    $admin = $this->drupalCreateUser([], NULL, TRUE);
    $this->drupalLogin($admin);

    $this->drupalGet('admin/config/search/pages');
    $this->assertSession()->statusCodeEquals(200);

    // Check if the page contains fields from the search_config module.
    $this->assertSession()->pageTextContains('Labels and string overrides');
    $this->assertSession()->pageTextContains('Additional Node Search Configuration');

    // Set the label for the submit button.
    $edit = [];
    $edit['search_config_string_overrides[labels][basic_submit]'] = 'My new button';
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');

    // Check if the service returns saved value.
    $labels = \Drupal::service('search_config.helper')->stringOverrides('labels');
    $this->assertEquals($labels['basic_submit'], 'My new button');

    $this->drupalGet('search/node');
    $this->assertSession()->statusCodeEquals(200);

    // Check if the search page uses the new label.
    $this->assertSession()->elementAttributeContains('css', '#search-form #edit-submit', 'value', 'My new button');
  }

}
