<?php
namespace App\Controllers;

use App\Views\View;

class HomeController
{
    protected $view;

    /**
     * HomeController constructor.
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * Index
     *
     * Return the view
     *
     * @param $request
     * @param $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}