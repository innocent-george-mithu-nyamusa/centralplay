<?php


namespace Classes;


class CategoryContr extends Category
{

    private $cName;
    private $cId;


    protected function addId($id)
    {
        $this->cId = Utilities::cleanData($id);
        $this->checkId();
    }

    private function checkId()
    {
        $this->setId($this->cId);
    }

    protected function addName($name)
    {
        $this->cName =Utilities::cleanData($name);
        $this->checkName();
    }

    private function checkName()
    {
        $this->setCategoryName($this->cName);
    }
}