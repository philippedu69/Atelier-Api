<?php


namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;


class Api
{
    private $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function listBooks()
    {
        $response = $this->client->request('GET', 'http://bf3f1da9.ngrok.io/books/');
        return $response->toArray();
    }
}