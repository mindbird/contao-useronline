<?php
/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 10.04.15
 * Time: 21:13
 */

$GLOBALS['TL_DCA']['tl_useronline'] = array(

    // Config
    'config' => array(
        'dataContainer' => 'Table',
        'ptable' => 'tl_useronline',
        'sql' => array(
            'keys' => array(
                'id' => 'primary',
                'ip' => 'unique',
                'tstamp' => 'index'
            )
        ),
    ),

    // Fields
    'fields' => array(
        'id' => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'ip' => array(
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'tstamp' => array(
            'sql' => "int(10) unsigned NOT NULL default '0'"
        )
    )
);