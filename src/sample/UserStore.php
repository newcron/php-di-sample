<?php


namespace phpdisample\sample;


class UserStore
{
    private $contents = array();


    public function load($id)
    {
        return @$this->contents[$id]?:null;
    }

    public function put($id, $data)
    {
        $this->contents[$id] = $data;
    }
}