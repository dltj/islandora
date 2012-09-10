<?php

/**
 * @file
 * islandora-object-edit.tpl.php: This is a template for objects that do not have
 * a module to registered to build their display.
 *
 * islandora_object is a fedora tuque Object
 *    $object->label
 *    $object->id
 * to get the contents of a datastream
 *    $object['dsid']->content
 *
 * $dublin_core is a Dublin_Core object
 * which is an array of elements, such as dc.title
 * and each element has an array of values.  dc.title can have none, one or many titles
 * this is the case for all dc elements.
 *
 */
?>

<?php drupal_set_title($islandora_object->label); ?>

<?php print (theme_table($variables['datastream_table'])); ?>