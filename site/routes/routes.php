<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

use UserFrosting\Sprinkle\Core\Util\NoCache;

$app->group('/site', function () {
    $this->get('/page1', 'UserFrosting\Sprinkle\Site\Controller\SiteController:page1');
    //$this->get('/page2', 'UserFrosting\Sprinkle\site\src\Controller\SiteController:mainpage');
    $this->get('/group1', 'UserFrosting\Sprinkle\Site\Controller\SiteController:group1')->add('checkEnvironment');
    $this->get('/group2', 'UserFrosting\Sprinkle\Site\Controller\SiteController:group2')->add('checkEnvironment');

})->add(new NoCache());

