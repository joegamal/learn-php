<?php 

/**
 * what is the difference between the require and include functions 
 * 
 * the include include function doesnot stop every thing if it didnot find the file
 * 
 * 
 * the require function stops everything if it didnot find the function
 */




//the file doesnot exist and it will continue
include("some_file.some_extenstion");


//the file doesnot exist and it will not run and return faital error
require("some_file.some_extenstion");