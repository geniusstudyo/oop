<?php

$payload = file_get_contents('https://sunstones.ua/pagexml/380972388564/yml.xml');
   $xml = new SimpleXMLElement($payload);

   $offers = $xml->shop->offers->offer;

	foreach ($offers as $offer) {

	echo $offer->name. '<br>';

}ывыфвывфвы