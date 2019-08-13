<?php

if ( ! function_exists('goodwish_edge_sidebar_options_map') ) {

	function goodwish_edge_sidebar_options_map() {

		goodwish_edge_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__('Sidebar', 'goodwish'),
				'icon'  => 'fa fa-indent'
			)
		);

		$panel_widgets = goodwish_edge_add_admin_panel(
			array(
				'page'  => '_sidebar_page',
				'name'  => 'panel_widgets',
				'title' => esc_html__('Widgets', 'goodwish')
			)
		);

		/**
		 * Navigation style
		 */
		goodwish_edge_add_admin_field(array(
			'type'			=> 'color',
			'name'			=> 'sidebar_background_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Sidebar Background Color', 'goodwish'),
			'description'	=> esc_html__('Choose background color for sidebar', 'goodwish'),
			'parent'		=> $panel_widgets
		));

		$group_sidebar_padding = goodwish_edge_add_admin_group(array(
			'name'		=> 'group_sidebar_padding',
			'title'		=> esc_html__('Padding', 'goodwish'),
			'parent'	=> $panel_widgets
		));

		$row_sidebar_padding = goodwish_edge_add_admin_row(array(
			'name'		=> 'row_sidebar_padding',
			'parent'	=> $group_sidebar_padding
		));

		goodwish_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_top',
			'default_value'	=> '',
			'label'			=> esc_html__('Top Padding', 'goodwish'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		goodwish_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_right',
			'default_value'	=> '',
			'label'			=> esc_html__('Right Padding', 'goodwish'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		goodwish_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_bottom',
			'default_value'	=> '',
			'label'			=> esc_html__('Bottom Padding', 'goodwish'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		goodwish_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_left',
			'default_value'	=> '',
			'label'			=> esc_html__('Left Padding', 'goodwish'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		goodwish_edge_add_admin_field(array(
			'type'			=> 'select',
			'name'			=> 'sidebar_alignment',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Alignment', 'goodwish'),
			'description'	=> esc_html__('Choose text aligment', 'goodwish'),
			'options'		=> array(
				'left' => esc_html__('Left', 'goodwish'),
				'center' => esc_html__('Center', 'goodwish'),
				'right' => esc_html__('Right', 'goodwish')
			),
			'parent'		=> $panel_widgets
		));

	}

	add_action( 'goodwish_edge_options_map', 'goodwish_edge_sidebar_options_map', 9);

}