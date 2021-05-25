function list_all_product_tags_woocommerce() {

	$terms = get_terms(array('taxonomy' => 'product_tag', 'hide_empty' => false));
	
	$output = "";
	$output .= '<div class="list-all-product-tags"><ul class="list-tags">';
	foreach ( $terms as $term ) {
			$output .= '<li>';
			$t_url = get_term_link($term->term_id,'product_tag');
			$t_name = $term->name;
			$output .= "<a href='$t_url'>$t_name</a><br></li>";
		}
	$output .= '</ul></div>';
	
	return $output;
}
	
add_shortcode( 'listproducttags', 'list_all_product_tags_woocommerce' );
