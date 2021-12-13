<?php 
$productIds = array();


if(filter_input(INPUT_POST, 'add_cart')){


if(isset($_SESSION['cart'])){

	$productIds = array_column($_SESSION['cart'], 'id');

	$count = count($_SESSION['cart']);


	if(!in_array(filter_input(INPUT_GET, 'id'), $productIds)){

		$_SESSION['cart'][$count] = array(
       "id" => filter_input(INPUT_GET, 'id'),
		"quantity" => filter_input(INPUT_POST, 'quantity'),
		"price" => filter_input(INPUT_POST, 'price'),
		"name" => filter_input(INPUT_POST, 'name'),
		"description" => filter_input(INPUT_POST, 'description'),
		"photo" => filter_input(INPUT_POST, 'photo')

	);
		
	} else{


			for ($existing_ids=0; $existing_ids < count($productIds) ; $existing_ids++) { 
			if($productIds[$existing_ids] = filter_input(INPUT_GET, 'id')){
				$_SESSION['cart'][$existing_ids]['quantity'] += filter_input(INPUT_POST, 'quantity');
			}
			}
		
	}

} else{


	$_SESSION['cart'][0] = array(

		"id" => filter_input(INPUT_GET, 'id'),
		"quantity" => filter_input(INPUT_POST, 'quantity'),
		"price" => filter_input(INPUT_POST, 'price'),
		"name" => filter_input(INPUT_POST, 'name'),
		"description" => filter_input(INPUT_POST, 'description'),
		"photo" => filter_input(INPUT_POST, 'photo')

	);
}

}

if(filter_input(INPUT_GET, "delete")){

	foreach ($_SESSION['cart'] as $key => $value) {

		if($value['id'] == filter_input(INPUT_GET, "delete"))
		unset($_SESSION['cart'][$key]);
	}

	$_SESSION['cart']  = array_values($_SESSION['cart']);
}

?>