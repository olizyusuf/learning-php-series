<?php

namespace data;

class SocialMedia
{

    public string $name;
}

final class Facebook extends SocialMedia
{
}

// // akan error dan tidak bisa di ovveride oleh turunannya
class FakeFacebook extends Facebook
{
}

class Twitter extends SocialMedia
{
    final public function login(string $username)
    {
        echo "login $username";
    }
}

// akan error dan tidak bisa di ovveride oleh turunannya
class FakeTwitter extends Twitter
{
    public function login(string $username)
    {
        echo "login saja $username";
    }
}
