<?php
/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 10.04.15
 * Time: 21:02
 */

namespace Useronline;

class Useronline {
    public function generatePageHook(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        $objDatabase = \Database::getInstance();
        $objResult = $objDatabase->query("SELECT ip FROM tl_useronline WHERE ip = INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "')");

        if($objResult->count() > 0) {
            $objDatabase->query("UPDATE tl_useronline SET tstamp = " . time() . " WHERE ip = INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "')");
        } else {
            $objDatabase->query("INSERT INTO tl_useronline (ip, tstamp) VALUES (INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "'), " . time() . ")");
        }
        $this->deleteOldEntries();
    }

    public function addSystemMessages() {
        $objDatabase = \Database::getInstance();
        $this->deleteOldEntries();
        $objResult = $objDatabase->query("SELECT ip FROM tl_useronline");
        $objTemplate = new \BackendTemplate('be_useronline');
        $objTemplate->intVisitorOnline = $objResult->count();
        return $objTemplate->parse();
    }

    /**
     * @param $objDatabase
     */
    public function deleteOldEntries()
    {
        $objDatabase = \Database::getInstance();
        $objDatabase->query("DELETE FROM tl_useronline WHERE " . (time() - 300) . " > tstamp");
    }
}
