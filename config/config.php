<?php
/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 10.04.15
 * Time: 20:58
 */

$GLOBALS['TL_HOOKS']['generatePage'][] = array('Useronline\UseronlineBackend', 'generatePageHook');
$GLOBALS['TL_HOOKS']['getSystemMessages'][] = array('Useronline\UseronlineBackend', 'addSystemMessages');