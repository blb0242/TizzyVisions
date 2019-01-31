<?php

/**
 * @author Byron Brown <blb0242@unt.edu>
 * Documentation: https://github.com/razoyo/devtest
 * 
 */

  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once 'raz-lib.php';
  require_once 'dev-lib.php';
  
  $formatKey = 'csv'; // csv, xml, or json
  
  // Connect to SOAP API using PHP's SoapClient class
  $apiWsdl = 'https://www.shopjuniorgolf.com/api/?wsdl';
  $apiUser = 'devtest';
  $apiKey = 'ku%64TeYMo5mAIFj8e';

  $soap = new SoapClient($apiWsdl);
  
  // Session login
  $session = $soap->login($apiUser, $apiKey);
  // API Call for product IDs
  $product_IDs = $soap->call($session, 'catalog_product.list');

  //FormatFactory
  $factory = new FormatFactory(); 
  $format = $factory->create($formatKey);

  // Set products and format based on format type
  $output = new ProductOutput();
  $output->setProducts($product_IDs);
  $output->setFormat($format);
  $output->format();
?>
