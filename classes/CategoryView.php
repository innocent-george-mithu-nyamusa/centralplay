<?php


namespace Classes;


class CategoryView extends CategoryContr
{
    public function __construct() {

    }

    public function createCategory($catName) :bool
    {
        $id = Utilities::genUniqueId("cat");
        $this->addId($id);
        $this->addName($catName);
        return $this->createCategoryResult();
    }

    public function updateCategory($id, $name): bool
    {

        $this->addName($name);
        $this->addId($id);
        return $this->updateCategoryResult();
    }

    public function deleteCategory($id)
    {
        $this->addId($id);
        return $this->deleteCategoryResult();
    }

    public function getCategories(): ?array
    {
        return $this->getCategoriesReult();

    }

    public function getCategory( string $id): ?array {
        $this->addId($id);
        return parent::getCategoryStatus();
    }


}