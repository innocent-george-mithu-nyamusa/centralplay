<?php


namespace Classes;


use Exception;
use PDO;

class Category extends Dbh
{
    private string $categoryId;
    private string $categoryName;
    private string $categoryImage;
    private string $categoryIcon;

    /**
     * @param string $categoryImage
     */
    protected function setCategoryImage(string $categoryImage): void
    {
        $this->categoryImage = $categoryImage;
    }

    /**
     * @param string $categoryIcon
     */
    protected function setCategoryIcon(string $categoryIcon): void
    {
        $this->categoryIcon = $categoryIcon;
    }

    protected function getCategoriesResult(): ?array
    {
        return $this->getCategories();
    }

    private function getCategories(): array|bool
    {
        try {
            $allCategoriesQuery = "SELECT * FROM category";
            $allCategoriesStmt = $this->connect()->prepare($allCategoriesQuery);
            $allCategoriesStmt->execute();
            $categories = $allCategoriesStmt->fetchAll();
            return $categories;
        } catch (Exception $exception) {

            echo "Failed to get categories" . $exception->getMessage();
            return false;
        }
    }


    protected function setId($id)
    {
        $this->categoryId = $id;
    }

    protected function setCategoryName($name)
    {
        $this->categoryName = $name;
    }

    protected function updateCategoryResult(): bool
    {
        return $this->updateCategory();
    }

    private function updateCategory(): bool
    {

        try {
            $updateCategoryQuery = "UPDATE category SET category_name=? WHERE category_id=?";
            $updateCategoryStmt = $this->connect()->prepare($updateCategoryQuery);
            $updateCategoryStmt->execute([$this->categoryName, $this->categoryId]);

            return $updateCategoryStmt->execute();
        } catch (Exception $exception) {
            echo "failed to update category \n" . $exception->getMessage();
            return false;
        }
    }

    protected function deleteCategoryResult(): bool
    {
        return $this->deleteCategory();
    }

    private function deleteCategory(): bool
    {
        try {
            $deleteCategoryQuery = "DELETE FROM category WHERE category_id=?";
            $deleteCategoryStmt = $this->connect()->prepare($deleteCategoryQuery);

            return $deleteCategoryStmt->execute([$this->categoryId]);
        } catch (Exception $exception) {
            echo "Failed to Delete Category \n" . $exception->getMessage();
            return false;
        }

    }

    protected function createCategoryResult(): bool
    {
        return $this->createCategory();
    }

    private function createCategory(): bool
    {
        try {
            $createCategoryQuery = "INSERT INTO category(
                     category_id,
                     category_name,
                     cat_image,
                     cat_icon
                    ) VALUES (:categoryId, :categoryName, :categoryImage, :categoryIcon)";
            $createCategoryStmt = $this->connect()->prepare($createCategoryQuery);
            $createCategoryStmt->bindParam(":categoryId", $this->categoryId);
            $createCategoryStmt->bindParam(":categoryName", $this->categoryName);
            $createCategoryStmt->execute();
            return true;

        } catch (Exception $exception) {
            echo "Failed to create categoory" . $exception->getMessage();
            return false;
        }

    }

    protected function getCategoryStatus(): ?array
    {
        return $this->getCategory();
    }

    private function getCategory(): ?array
    {
        try {
            $getCategoryQuery = "SELECT * FROM category WHERE category_id=:cat_id";
            $getCategorystmt = $this->connect()->prepare($getCategoryQuery);
            $getCategorystmt->bindParam(":cat_id", $this->categoryId);
            $getCategorystmt->execute();
            $cat = $getCategorystmt->fetchAll(PDO::FETCH_ASSOC);
            return $cat[0];

        } catch (Exception $exception) {

            echo "Failed to get category " . $exception->getMessage();
            return null;
        }
    }

}