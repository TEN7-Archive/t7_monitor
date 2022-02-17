<?php

namespace Drupal\t7_monitor\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for T7 Monitor routes.
 */
class T7MonitorController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Monitoring Things That Matter'),
    ];

    // This page must never be cached so uptime tests can always get live output.
    $build['#cache'] = [
      'max-age' => 0,
    ];

    $robots = [
      '#type' => 'html_tag',
      '#tag' => 'meta',
      '#attributes' => [
        'name' => 'robots',
        'content' => 'noindex, nofollow',
      ],
    ];

    $build['#attached']['html_head'][] = [$robots, 'robots'];

    return $build;
  }

}
