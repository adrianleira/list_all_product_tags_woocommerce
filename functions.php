function list_all_product_tags_woocommerce() {

	$terms = get_terms(array('taxonomy' => 'product_tag', 'hide_empty' => false));
	
	$content = "";
    $content .= '<div class="list-all-product-tags">';
	$content .= '<ul class="list-tags">'; 
	foreach ( $terms as $term ) {
			$content .= '<li>';   
			$t_url=  get_term_link($term->term_id,'product_tag');
			$t_name= $term->name;
			$content .= "<a href='$t_url'>$t_name</a><br>";
			$content .= '</li>';
		}
	$content .= '</ul></div>';
	
	return $content;
}
	
add_shortcode( 'listproducttags', 'list_all_product_tags_woocommerce' );
