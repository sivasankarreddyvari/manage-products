<div id="menu_list">
  <ul>
    <li><h2>Categories</h2>
      <ul>
        <?php 
        foreach ($categoryList as $category)
        {
          $categoryName = $category['Category']['category_name'];
          $categoryId = $category['Category']['id'];

          $subcategoryArray = array();

          if(isset($category['SubCategory'][0]) && !empty($category['SubCategory'][0]))
          {
            $subcategoryArray = $category['SubCategory'];
          }
          ?>
          <li><a href="<?php echo HTTP_HOST?>/products/category_list/<?php echo $categoryId;?>" title="test"><?php echo $categoryName;?></a>
            <ul>
            <?php
            if(count($subcategoryArray) > 0)
            {
              foreach($subcategoryArray as $subcategory)
              {
                $subcategoryName = $subcategory['sub_category_name'];
                $subCatId = $subcategory['id'];
                ?>
                <li>
                  <a href="<?php echo HTTP_HOST?>/products/product_list/<?php echo $subCatId;?>" title="sss"><?php echo $subcategoryName;?></a>
                </li>
              <?php
              }
            }
            ?>
            </ul>
          </li>
        <?php
        }
        ?>
      </ul>
    </li>
  </ul>
</div>