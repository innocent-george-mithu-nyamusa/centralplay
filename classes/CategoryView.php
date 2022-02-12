<?php


namespace Classes;


class CategoryView extends CategoryContr
{
    public function __construct() {

    }

    public function createCategory(string $catName, string $categoryIcon, string $categoryImage) :bool
    {
        $id = Utilities::genUniqueId("cat");
        $this->addId($id);
        $this->addName($catName);
        $this->setCCategoryIcon($categoryIcon);
        $this->setCCategoryImage($categoryImage);

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
        return $this->getCategoriesResult();

    }

    public function getCategory( string $id): ?array {
        $this->addId($id);
        return parent::getCategoryStatus();
    }


}