<?php

namespace Drupal\t7_monitor\ExistingSite;

use Drupal\Tests\t7\ExistingSite\T7ExistingSiteBase;

class T7MonitorTest extends T7ExistingSiteBase {

  /**
   * Verifies that the page loads for anonymous users with correct robots tag.
   */
  function testT7Monitor() {
    $this->drupalGet('t7-monitor');
    $this->assertSession()->statusCodeEquals(200);
    $page_content = $this->getCurrentPageContent();
    $this->assertStringContainsString('<meta name="robots" content="noindex, nofollow" />', $page_content);
    $this->assertSession()->responseHeaderEquals('Cache-Control' , 'must-revalidate, no-cache, private');
    $this->assertSession()->responseHeaderEquals('X-Drupal-Dynamic-Cache', 'UNCACHEABLE');
  }

}
