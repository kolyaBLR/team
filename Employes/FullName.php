<?php
class FullName
{
    private $firstName;
    private $lastName;
    private $patronymic;

    public function __construct($firstName, $lastName, $patronymic)
    {
        $this->setName($firstName, $lastName, $patronymic);
    }

    public function setName($firstName, $lastName, $patronymic)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->patronymic = $patronymic;
    }

    public function getName()
    {
        return '$firstName ' . '$lastName ' . '$patronymic';
    }
}