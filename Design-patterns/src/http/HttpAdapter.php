<?php

namespace Alura\DesignPattern\http;

interface HttpAdapter
{
    public function post(string $url, array $data = []) : void;
}