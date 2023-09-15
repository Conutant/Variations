<?php

/**
 * This file contains scripts and styles that will be enqueued to the website.
 *
 * @package Variations
 *
 */

if (!function_exists('variations_register_pattern_categories')) {
    /**
     * Register Block Pattern Categories.
     * 
     * @return void
     */
    function variations_register_pattern_categories()
    {

        /**
         * Register "homepage" Block Pattern Category.
         */
        register_block_pattern_category(
            'homepage',
            array('label' => __('Home Pages', 'variations'))
        );

        /**
         * Register "aboutpage" Block Pattern Category.
         */
        register_block_pattern_category(
            'aboutpage',
            array('label' => __('About Pages', 'variations'))
        );

        /**
         * Register "servicepage" Block Pattern Category.
         */
        register_block_pattern_category(
            'servicepage',
            array('label' => __('Service Pages', 'variations'))
        );

        /**
         * Register "contactpage" Block Pattern Category.
         */
        register_block_pattern_category(
            'contactpage',
            array('label' => __('Contact Pages', 'variations'))
        );

        /**
         * Register "blankpage" Block Pattern Category.
         */
        register_block_pattern_category(
            'blankpage',
            array('label' => __('Blank Pages', 'variations'))
        );
    }
}

add_action('init', 'variations_register_pattern_categories');
