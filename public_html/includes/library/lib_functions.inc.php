<?php
  
  class functions {
  
    public static function construct() {
    }
    
    public static function __callstatic($function, $arguments) {
      $file = 'func_' . substr($function, 0, (int)strpos($function, '_')) .'.inc.php';
      include_once(FS_DIR_HTTP_ROOT . WS_DIR_FUNCTIONS . $file);
      return call_user_func_array($function, $arguments);
    }
  }
  
?>