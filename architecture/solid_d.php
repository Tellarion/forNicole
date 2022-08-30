<?php

interface IService {
    public function service();
}

class XMLHttpService extends XMLHTTPRequestService implements IService  {
    protected $service;

    public function service() {
        $this->service = "XMLHHTTPService";
    }
}

class Http {

    public function __construct(IService $service) { 
        $this->service = $service;
    }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}
