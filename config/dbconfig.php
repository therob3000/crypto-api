<?php

Class ccDbConfig {

    function config() {
        $itm['driver'] = 'mysql';
        $itm['host'] = '127.0.0.1';
        $itm['database'] = 'site';
        $itm['username'] = '';
        $itm['password'] = '';

        if(isset($itm)) {
            return $itm;
        } else {
            return 'false';
        }
    }
}

?>
