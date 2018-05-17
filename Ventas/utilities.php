<?php

function debug( $value )
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}
function availability( $is_available )
{
  if( $is_available  )
                {
                  echo 'Si';
                }else
                {
                  echo 'No';
                }
}
#funcion que obtiene el año 
function say_year()
{
  return date('Y');
}