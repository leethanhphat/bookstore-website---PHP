<?php
include_once("category.php");
include_once("modules/db_module.php");

class CategoryModel
{
    public function getCategoryList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_categories  ");
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $category = new Category(
                $rows["categoryID"],
                $rows["category_name"]
            );

            array_push($data, $category);
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
