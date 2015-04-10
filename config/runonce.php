<?php

/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 10.04.15
 * Time: 22:20
 */
class RunonceJob extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $objDatabase = \Database::getInstance();
        if (!$objDatabase->tableExists('tl_useronline')) {
            $objDatabase->query("CREATE TABLE `tl_useronline` (
`id` int(10) unsigned NOT NULL auto_increment,
  `ip` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ip` (`ip`),
  KEY `tstamp` (`tstamp`)
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;");
        }
    }
}

$objRunonceJob = new RunonceJob();
$objRunonceJob->run();
?>