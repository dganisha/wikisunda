<?php 

function urlSlug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

function unSlug($string){
   $slug=preg_replace('/[-]+/', ' ', $string);
   return $slug;
}