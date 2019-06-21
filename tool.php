<?php
// +----------------------------------------------------------------------
// | Constructed by Jokin [ Think & Do & To Be Better ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2019 Jokin All rights reserved.
// +----------------------------------------------------------------------
// | Author: Jokin <Jokin@twocola.com>
// +----------------------------------------------------------------------

// Initialize
define('TPL_SUFFIX', '.tpl');
define('PAGE_SUFFIX', '.html');
date_default_timezone_set('Asia/Shanghai');
$index_path = './tpl/index' . TPL_SUFFIX;
generate($index_path);

// Generate Page
function generate(string $path) : void {
  $file = file_get_contents($path);
  $update_time = date('Y-m-d H:i');
  $file = str_replace('__UPDATE_TIME__', $update_time, $file);
  $filename = basename($path, TPL_SUFFIX) . PAGE_SUFFIX;
  file_put_contents('./'.$filename, $file);
}
?>
