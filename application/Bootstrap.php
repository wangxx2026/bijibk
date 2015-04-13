<?php
/**
 * This file should be under the APPLICATION_PATH . "/application/"(which was defined in the config passed to Yaf_Application).
 * and named Bootstrap.php,  so the Yaf_Application can find it
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {
    function _initConfig(Yaf_Dispatcher $dispatcher) {
        echo "1st called\n";
    }

    function _initPlugin($dispatcher) {
        echo "2nd called\n";
    }
}
?>