<?php

namespace Drupal\Tests\system\Functional\Menu;

use Drupal\Core\Url;

/**
 * Provides test assertions for verifying the active menu trail.
 */
trait AssertMenuActiveTrailTrait {

  /**
   * Assert that active trail exists in a menu tree output.
   *
   * @param array $tree
   *   An associative array whose keys are link paths and whose
   *   values are link titles (not sanitized) of an expected active trail in a
   *   menu tree output on the page.
   * @param bool $last_active
   *   Whether the last link in $tree is expected to be active (TRUE)
   *   or just to be in the active trail (FALSE).
   */
  protected function assertMenuActiveTrail($tree, $last_active) {
    end($tree);
    $active_link_path = key($tree);
    $active_link_title = array_pop($tree);
    $xpath = '';
    if ($tree) {
      $i = 0;
      foreach ($tree as $link_path => $link_title) {
        $part_xpath = (!$i ? '//' : '/following-sibling::ul/descendant::');
        $part_xpath .= 'li[contains(@class, :classy-class-trail) or contains(@class, :olivero-class-trail)]/a[contains(@href, :href) and contains(text(), :title)]';
        // These active trail classes are added by classy/olivero. This should
        // be refactored to work with stark and not depend on any specific
        // theme.
        // https://www.drupal.org/project/drupal/issues/3276652
        $part_args = [
          ':classy-class-trail' => 'menu-item--active-trail',
          ':olivero-class-trail' => 'menu__item--active-trail',
          ':href' => Url::fromUri('base:' . $link_path)->toString(),
          ':title' => $link_title,
        ];
        $xpath .= $this->assertSession()->buildXPathQuery($part_xpath, $part_args);
        $i++;
      }
      $elements = $this->xpath($xpath);
      $this->assertNotEmpty($elements, 'Active trail to current page should be visible in menu tree.');

      // Append prefix for active link asserted below.
      $xpath .= '/following-sibling::ul/descendant::';
    }
    else {
      $xpath .= '//';
    }
    $xpath_last_active = ($last_active ? 'and contains(@class, :class-active)' : '');
    $xpath .= 'li[contains(@class, :classy-class-trail) or contains(@class, :olivero-class-trail)]/a[contains(@href, :href) ' . $xpath_last_active . 'and contains(text(), :title)]';
    $args = [
      ':classy-class-trail' => 'menu-item--active-trail',
      ':olivero-class-trail' => 'menu__item--active-trail',
      ':class-active' => 'is-active',
      ':href' => Url::fromUri('base:' . $active_link_path)->toString(),
      ':title' => $active_link_title,
    ];
    $elements = $this->xpath($xpath, $args);
    $this->assertNotEmpty($elements, sprintf('Active link %s should be visible in menu tree, including active trail links %s.', $active_link_title, implode(' » ', $tree)));
  }

}
