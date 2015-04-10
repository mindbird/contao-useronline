<?php
/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 10.04.15
 * Time: 21:45
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Useronline',
));
/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Useronline\Backend' => 'system/modules/useronline/classes/UseronlineBackend.php',
));
/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'be_useronline'       => 'system/modules/useronline/templates',
));