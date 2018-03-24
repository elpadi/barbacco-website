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
			array (
				'key' => 'field_5ab678e4a653f',
				'label' => 'Images',
				'name' => 'news_article_images',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5ab6790ba6540',
						'label' => 'Image',
						'name' => 'news_article_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'uploadedTo',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
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
