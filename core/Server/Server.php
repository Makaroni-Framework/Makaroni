<?php 
namespace Makaroni\Framework\Server;

class Server {
    
    private $server;

    public function __construct()
    {
        $this->server = $_SERVER;
    }

    public function getUri(): string
    {
        return $this->server['REQUEST_URI'];
    }
}