<?php

namespace Controllers\User;

use ErrorException;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class GetController
{
    private Request $request;
    private Response $response;
    private $args;

    /**
     * @throws ErrorException
     */
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;

        $this->response->getBody()->write('123');

        return $this->response;
    }
}