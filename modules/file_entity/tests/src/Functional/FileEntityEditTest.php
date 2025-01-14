<?php

namespace Drupal\Tests\file_entity\Functional;

use Drupal\file\Entity\File;
use Drupal\file\FileInterface;

/**
 * Create a file and test file edit functionality.
 *
 * @group file_entity
 */
class FileEntityEditTest extends FileEntityTestBase {
  protected $web_user;
  protected $admin_user;

  protected static $modules = ['block'];

  function setUp(): void {
    parent::setUp();
    // Add the tasks and actions blocks.
    $this->drupalPlaceBlock('local_actions_block');
    $this->drupalPlaceBlock('local_tasks_block');

    $this->web_user = $this->drupalCreateUser(array('edit own document files', 'create files'));
    $this->admin_user = $this->drupalCreateUser(array('bypass file access', 'administer files'));
  }

  /**
   * Check file edit functionality.
   */
  function testFileEntityEdit() {
    $this->drupalLogin($this->web_user);

    $test_file = $this->getTestFile('text');
    $name_key = "filename[0][value]";

    // Create file to edit.
    $edit = array();
    $edit['files[upload]'] = \Drupal::service('file_system')->realpath($test_file->uri);
    $this->drupalGet('file/add');
    $this->submitForm($edit, t('Next'));
    if ($this->xpath('//input[@name="scheme"]')) {
      $this->submitForm(array(), t('Next'));
    }

    // Check that the file exists in the database.
    $file = $this->getFileByFilename('text-0_0.txt');
    $this->assertInstanceof(FileInterface::class, $file, t('File found in database.'));

    // Check that "edit" link points to correct page.
    $this->clickLink(t('Edit'));
    $edit_url = $file->toUrl('edit-form', ['absolute' => TRUE])->toString();
    $actual_url = $this->getURL();
    $this->assertEquals($edit_url, $actual_url, t('On edit page.'));

    // Check that the name field is displayed with the correct value.
    $link_text = t('Edit');
    $this->assertSession()->pageTextContains(strip_tags($link_text));
    $this->assertSession()->fieldValueEquals($name_key, $file->label());

    // The user does not have "delete" permissions so no delete button should be found.
    $this->assertSession()->fieldNotExists('op');

    // Edit the content of the file.
    $edit = array();
    $edit[$name_key] = $this->randomMachineName(8);
    // Stay on the current page, without reloading.
    $this->submitForm($edit, t('Save'));

    // Check that the name field is displayed with the updated values.
    $this->assertSession()->pageTextContains($edit[$name_key]);
  }

  /**
   * Check changing file associated user fields.
   */
  function testFileEntityAssociatedUser() {
    $this->drupalLogin($this->admin_user);

    // Create file to edit.
    $test_file = $this->getTestFile('text');
    $edit = array();
    $edit['files[upload]'] = \Drupal::service('file_system')->realpath($test_file->uri);
    $this->drupalGet('file/add');
    $this->submitForm($edit, t('Next'));
    $this->submitForm(array(), t('Next'));

    // Check that the file was associated with the currently logged in user.
    $file = $this->getFileByFilename('text-0_0.txt');
    $this->assertSame($file->getOwnerId(), $this->admin_user->id(), 'File associated with admin user.');

    // Try to change the 'associated user' field to an invalid user name.
    $edit = array(
      'uid[0][target_id]' => 'invalid-name',
    );
    $this->drupalGet('file/' . $file->id() . '/edit');
    $this->submitForm($edit, t('Save'));
    if (\version_compare(\Drupal::VERSION, '9.2', '<')) {
      $this->assertSession()->pageTextContains('There are no entities matching "invalid-name".');
    }
    else {
      $this->assertSession()->pageTextContains('There are no users matching "invalid-name".');
    }

    // Change the associated user field to the anonymous user (uid 0).
    $edit = array();
    $edit['uid[0][target_id]'] = 'Anonymous (0)';
    $this->drupalGet('file/' . $file->id() . '/edit');
    $this->submitForm($edit, t('Save'));
    \Drupal::entityTypeManager()->getStorage('file')->resetCache();
    $file = File::load($file->id());
    $this->assertSame($file->getOwnerId(), '0', 'File associated with anonymous user.');

    // Change the associated user field to another user's name (that is not
    // logged in).
    $edit = array();
    $edit['uid[0][target_id]'] = $this->web_user->label();
    $this->drupalGet('file/' . $file->id() . '/edit');
    $this->submitForm($edit, t('Save'));
    \Drupal::entityTypeManager()->getStorage('file')->resetCache();
    $file = File::load($file->id());
    $this->assertSame($file->getOwnerId(), $this->web_user->id(), 'File associated with normal user.');

    // Check that normal users cannot change the associated user information.
    $this->drupalLogin($this->web_user);
    $this->drupalGet('file/' . $file->id() . '/edit');
    $this->assertSession()->fieldValueNotEquals('uid[0][target_id]', '');
  }
}
