<?php
class ProductsController extends AppController
{
  /**
  * Controller name
  *
  * @var unknown_type
  */
  var $name = "Products";
  /**
  * Used helpers
  *
  * @var array
  * @access public
  */
  var $helpers = array(
    'Form',
    'Html',
  	'Functions'
  );

  /**
  * Used models
  *
  * @var array
  * @access public
  */

  var $uses = array(
    'Product',
    'Category',
    'SubCategory'
  );

  /**
  * Function home page
  *
  * 
  * @access public
  */ 

  public function home()
  {
    // Setting the page title
    $this->set("title_for_layout","Home");
  
    // Getting all the categories
    $categoryList = $this->Category->getCategoryList();

    // Passing the categories list to views
    $this->set('categoryList', $categoryList);

    // Getting recently added 10 products by default
    $productList =  $this->Product->getRecentlyProducts();

    // Passing the products to view
    $this->set('productList', $productList);

  }

  /**
  * Function for getting search results.
  *
  * 
  * @access public
  */ 

  public function searchResult()
  {
		// Setting the page title
    $this->set("title_for_layout","Search Results");

		// Getting all the categories
    $categoryList = $this->Category->getCategoryList();

    // Passing the categories list to views
    $this->set('categoryList', $categoryList);

		// initialising the variable
		$whereCondition = '';
	  $search_keyword = '';
		// if any search keyword then setting into variable.
		if (isset($this->data['Product']['keywords']) && !empty($this->data['Product']['keywords']))
		{
	    $search_keyword = $this->data['Product']['keywords'];
	
		  if(!empty($whereCondition))
		  {	
				$whereCondition .= " AND ";
		  }
	
		  $whereCondition .= " (Product.product_name LIKE '%".$search_keyword."%') OR (Product.product_desc LIKE '%".$search_keyword."%') ";
		}

		$conditions[] = $whereCondition;
	
		// Getting the products and categories list agianst search criteria
		$productList = $this->Product->getSearchResults($conditions);
	
		// Passing for first product images by default.
		$this->set('productList', $productList);
	
		// Passing the search keywords to views
		$this->set('search_keyword', $search_keyword);
	
  }

 
  /**
  * Function for displaying product details
  *
  * 
  * @access public
  */ 

  public function product_details($productId = null) 
  {
    // Setting the page title
    $this->set("title_for_layout","Product Details");

    // if nothing passing then redirecting to home page.
    if (empty($productId))
    {
	  	$this->redirect('home');
    }

    // have to user before filter
    $whereCondition = " Product.id = '".$productId."' ";
    $conditions[] = $whereCondition;
    $productList = $this->Product->getSearchResults($conditions);
    $this->set('productList', $productList);

    // These setting for breadcrump.
    $productCatNameArray = $this->Product->getProductCategories($productId);

		// These setting for breadcrump.
    $categoryNameArray = $this->Category->getCategoryName($productCatNameArray['SubCategory']['category_id']);

		$this->set('productCatName',$categoryNameArray['Category']['category_name']);
    $this->set('productCatId',$categoryNameArray['Category']['id']);

    $this->set('productSubCatName',$productCatNameArray['SubCategory']['sub_category_name']);
    $this->set('productSubCatId',$productCatNameArray['SubCategory']['id']);

  }

  /**
  * Function for displaying category details
  *
  * 
  * @access public
  */ 

  public function category_list($catId = null)
  {

		// Setting the page title
		$this->set("title_for_layout","Category Details");
	
		// if nothing passing then redirecting to home page.
	  if (empty($catId))
	  {
			$this->redirect('home');
	  }
	
		// Getting category list.
		$categoryList = $this->Category->getCategoryList();
		// Passing category list to views
		$this->set('categoryList', $categoryList);
	
		// Get category name
		$categoryNameArray = $this->Category->getCategoryName($catId);
		// Passing the category name to view
	  $this->set('selectedCategoryName', $categoryNameArray['Category']['category_name']);
	
		// getting subcategories
		$subCategoryDetails = $this->SubCategory->getSubcategoryDetails($catId);
	
		// passing the sub categories to views.
	  $this->set("subCategoryDetails",$subCategoryDetails);
	
		// getting the product for main category if any products.
		$whereCondition = " Product.category_id = '".$catId."' AND Product.sub_category_id = 0 ";
	  $conditions[] = $whereCondition;
	
	  // Getting product list
		$productList = $this->Product->getSearchResults($conditions);
	
		// passing product list to views
	  $this->set('productList', $productList);

 }

  /**
  * Function for product listing
  *
  * 
  * @access public
  */ 
  
  function product_list($subCatId = null)
  {
		// Setting the page title
		$this->set("title_for_layout","Product List");
	
		// If nothing passing then redirecting to home page.
	  if (empty($subCatId))
	  {
			$this->redirect('home');
	  }
	
		// Getting category list
		$categoryList = $this->Category->getCategoryList();
	
		// Passing categories to view
		$this->set('categoryList', $categoryList);
	
		// Getting subcategory name and passing to views
		$subCatArray = $this->SubCategory->getSubCategoryName($subCatId);
	  $this->set('selectedSubCategoryName', $subCatArray['SubCategory']['sub_category_name']);
	  $this->set('selectedCategoryName', $subCatArray['Category']['category_name']);
	  $this->set('selectedCategoryId', $subCatArray['Category']['id']);
	
	  // Getting all the products against subcategory id and passing to view
	  $whereCondition = " Product.sub_category_id = '".$subCatId."' ";
	  $conditions[] = $whereCondition;
	
	  // Getting the product list
	  $productList = $this->Product->getSearchResults($conditions);
	
	  // Passing the product list to view
	  $this->set('productList', $productList);
  }
  
  /**
   * Function for display products in admin
   *
   */
  function admin_index() 
  {
  	// setting the layout for admin
  	$this->layout = 'admin';
  	$this->Product->recursive = 0;
  	$this->set('products', $this->paginate());
  }

  /**
   * Function for add the products
   *
   */
  function admin_add() 
  {

  	// setting the layout for admin
  	$this->layout = 'admin';
  	
  	if (!empty($this->data)) 
  	{
  		$this->Product->create();
  		
  		if ($this->Product->save($this->data)) 
  		{
  			$this->Session->setFlash(__('The product has been saved', true));
  			$this->redirect(array('action' => 'index'));
  		} 
  		else 
  		{
  			$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
  		}
  	}
  	
		$categories = $this->Product->Category->find('list');
	
		$firstCategories = $this->Product->Category->find('first');
	
		// getting the subcategories for first category which is displaying by default
		$subCategoriesArray = $this->Product->SubCategory->find('list',array('conditions'=>array('SubCategory.category_id'=>$firstCategories['Category']['id'])));
	
		$subCategories[] = 'Please select';
		foreach ($subCategoriesArray as $key => $subCat) 
		{
			$subCategories[$key] = $subCat;
		}

		$this->set(compact('categories', 'subCategories'));

  }
  
  /**
   * Function for edit the products
   *
   */
  function admin_edit($id = null) 
  {
  	// setting the layout for admin
  	$this->layout = 'admin';
  	
  	// If the id not passing then redirecting
  	if (!$id && empty($this->data)) 
  	{
  		$this->Session->setFlash(__('Invalid product', true));
  		$this->redirect(array('action' => 'index'));
  	}
  	if (!empty($this->data)) 
  	{
  		if ($this->Product->save($this->data)) 
  		{
  			$this->Session->setFlash(__('The product has been saved', true));
  			$this->redirect(array('action' => 'index'));
  		} 
  		else 
  		{
  			$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
  		}
  	}
  	if (empty($this->data)) 
  	{
  		$this->data = $this->Product->read(null, $id);
  	}

  	$categories = $this->Product->Category->find('list');
  	
  	if(isset($this->data['SubCategory']['id']) && !empty($this->data['SubCategory']['id']))
  	{
  		$subCategories = $this->Product->SubCategory->find('list');
  	}
  	else
  	{
  		$firstCategories = $this->Product->Category->find('first');
  		
  		// getting the subcategories for first category which is displaying by default
  		$subCategoriesArray = $this->Product->SubCategory->find('list',array('conditions'=>array('SubCategory.category_id'=>$firstCategories['Category']['id'])));
  		
  		$subCategories[] = 'Please select';
  		foreach ($subCategoriesArray as $key => $subCat)
  		{
  			$subCategories[$key] = $subCat;
  		}
  	}

  	$this->set(compact('categories', 'subCategories'));
  }
  
  /**
   * Function for delete the products
   *
   */
  function admin_delete($id = null) 
  {
  	// setting the layout for admin
  	$this->layout = 'admin';
  	
  	// If the id not passing then redirecting
  	if (!$id) 
  	{
  		$this->Session->setFlash(__('Invalid id for product', true));
  		$this->redirect(array('action'=>'index'));
  	}
  	
  	if ($this->Product->delete($id)) 
  	{
  		$this->Session->setFlash(__('Product deleted', true));
  		$this->redirect(array('action'=>'index'));
  	}
  	
  	$this->Session->setFlash(__('Product was not deleted', true));
  	$this->redirect(array('action' => 'index'));
  }
  

  /*  AJAX Function for updating while selecting the category then will get subcategories
   *  against selected category
   */
  function getSubCatList()
  {
		$productId = $_POST['productId'];
	
		// GEtting subcategories against categoryid
		$ajaxSubCategoriesArray = $this->Product->SubCategory->find('list', array('conditions'=>array('SubCategory.category_id'=>$productId)));
	
		$select = '<div class="input select">
		<label for="ProductSubCategoryId">Sub Category</label>
		<select name="data[Product][sub_category_id]" id="ProductSubCategoryId">
		<option value="0">Please select</option>';
	
		foreach($ajaxSubCategoriesArray as $key => $subCategories) 
		{
			$select .= '<option value="'.$key.'">'.$subCategories.'</option>';
		}
		
		$select .= '</select></div>';
		echo $select;
		exit;

  }

}
?>