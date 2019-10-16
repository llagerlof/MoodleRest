<?php
class MoodleRestConnection
{
    private $server_address;
    private $token;
    private $return_format;

    public function __construct($server_address = null, $token = null, $return_format = MoodleRest::RETURN_ARRAY)
    {
        $this->setServerAddress($server_address);
        $this->setToken($token);
        $this->setReturnFormat($return_format);
    }
    public function getServerAddress()
    {
        return $this->server_address;
    }

    public function setServerAddress($server_address)
    {
        $this->server_address = $server_address;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getReturnFormat()
    {
        return $this->return_format;
    }

    public function setReturnFormat($return_format)
    {
        $this->return_format = $return_format;
    }
}
