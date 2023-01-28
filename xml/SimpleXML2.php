<?php 
/**
 * using libxml functionality to retrieve all XML errors when loading the document and then iterate over the errors: notice error in the <user> tag</user>
 */
libxml_use_internal_errors(true);

$data = 
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>Qozeem Odeniran</wornguser> 
<email>qozeem@sample.com</email>
</document>";

$xml = simplexml_load_string($data);
if($xml === false) {
    echo "Failed to load XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "\r\n", $error->message;
    }
} else {
    print_r($xml);
}
?>