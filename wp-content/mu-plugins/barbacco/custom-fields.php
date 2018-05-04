<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_news-article-fields',
		'title' => 'News Article Fields',
		'fields' => array (
			array (
				'key' => 'field_5ab678a1a653e',
				'label' => 'Headline',
				'name' => 'news_article_headline',
				'type' => 'text',
				'instructions' => 'Appears right below the title',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'barbacco_news',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
