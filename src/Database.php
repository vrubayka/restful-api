<?php

class Database
{
    public function __construct(
        private string $host,
        private string $name,
        private string $username,
        private string $password
    ) {}
}
