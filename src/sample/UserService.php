<?php
namespace phpdisample\sample;


class UserService
{
    private $userStore;

    public function __construct(UserStore $userStore)
    {
        $this->userStore = $userStore;
    }

    public function get($id)
    {
        $user = $this->userStore->load($id);
        if ($user === null) {
            throw new \InvalidArgumentException("not found $id");
        }

        return $user;
    }

    public function save($id, $name)
    {
        $this->userStore->put($id, ["name" => $name]);
    }

}