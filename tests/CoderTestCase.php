<?php

require_once drupal_get_path('module', 'coder') .'/scripts/coder_format/coder_format.inc';

class CoderTestCase extends DrupalWebTestCase {
  function assertFormat($input, $expect) {
    $result = coder_format_string_all($input);
    $this->assertIdentical($result, $input);
  }
}

