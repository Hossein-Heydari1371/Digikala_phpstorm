<?php


class Index extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $slider = $this->model->getSlider();
        $special = $this->model->getSpecial();
        $mostVisited = $this->model->mostVisited();
        $last_products = $this->model->last_products();

        $data = [$slider, $special, $mostVisited, $last_products];

        $this->getView('index/index', $data);


    }


}

