<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/api/cities' => [[['_route' => 'api_app_api_getcities', '_controller' => 'App\\Controller\\ApiController::getCitiesAction'], null, ['GET' => 0], null, false, false, null]],
            '/api/city' => [[['_route' => 'api_app_api_postcity', '_controller' => 'App\\Controller\\ApiController::postCityAction'], null, ['POST' => 0], null, false, false, null]],
            '/' => [[['_route' => 'cities', '_controller' => 'App\\Controller\\CitiesController::index'], null, null, null, false, false, null]],
            '/cities/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\CitiesController::addAction'], null, null, null, false, false, null]],
            '/cities/deleteall' => [[['_route' => 'deleteall', '_controller' => 'App\\Controller\\CitiesController::deleteall'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                    .'|/cities/delete/([^/]++)(*:65)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            65 => [[['_route' => 'deletecity', '_controller' => 'App\\Controller\\CitiesController::deleteAction'], ['id'], null, null, false, true, null]],
        ];
    }
}
