<?php
/*
Plugin Name: First Block
Description: My first Block
*/

function custom_block_init(){
    register_block_type_from_metadata(__DIR__);
}


add_action("init", "custom_block_init");