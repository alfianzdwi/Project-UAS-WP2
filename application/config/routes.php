<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//MENGAMBIL FUNGSI FILE YANG ADA DI FOLDER CONTROLLER

/*Home Page*/
$route['default_controller'] = 'home';
$route['products'] = 'Home/productpage';
$route['product-details/(.+)'] = 'Home/product_details/$1';

/*Product*/
$route['add-product'] = 'Product/add_product_form';
$route['product-list'] = 'Product/show_product_list';
$route['save-product'] = 'Product/insert_product';
$route['edit-product/(.+)'] = 'Product/edit_product/$1';
$route['update-product'] = 'Product/update_product';
$route['delete-product/(.+)'] = 'Product/delete_product/$1';

// Cart Class
$route['add-to-cart'] = 'Cart/add_to_cart';
$route['show-cart'] = 'Cart/show_cart';
$route['delete-to-cart/(.+)'] = 'Cart/delete_to_cart/$1';
$route['update-cart-qty'] = 'Cart/update_cart_quantity';
$route['update-cart-qty-payment'] = 'Cart/update_cart_quantity_payment';
$route['delete-to-cart-payment/(.+)'] = 'Cart/delete_to_cart_payment/$1';

//Login
$route['login'] = 'Login/login';
$route['admin-logout'] = 'Login/admin_logout';
$route['customer-registration'] = 'Login/customer_registration';
$route['customer-login'] = 'Login/customer_login';
$route['customer-logout'] = 'Login/customer_logout';

// Checkout
$route['shipping'] = 'Checkout/shipping';
$route['insert-shipping'] = 'Checkout/insert_shipping';
$route['payment'] = 'Checkout/payment';
$route['place-order'] = 'Checkout/place_order';
$route['order-success'] = 'Checkout/order_success';

// Search
$route['search'] = 'Search/index';

// Invoice
$route['manage-order'] = 'Invoice/manage_order';
$route['view-order/(.+)'] = 'Invoice/view_order/$1';
$route['delete-order/(.+)'] = 'Invoice/delete_order/$1';



$route['404_override'] = 'Home/_404_page';
$route['translate_uri_dashes'] = FALSE;
