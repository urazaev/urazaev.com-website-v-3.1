<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Breadcrumbs custom view
 * Parameters:
 *
 * @var array $items , array with pages ordered hierarchical
 * $items = array(
 *      0 => array(
 *          'name'  => 'Item name',
 *          'url'   => 'Item URL'
 *      )
 * )
 * Each $items array will contain additional information about item, e.g.:
 * 'items' => array (
 *        0 => array (
 *            'name' => 'Homepage',
 *          'type' => 'front_page',
 *            'url' => 'http://yourdomain.com/',
 *        ),
 *        1 => array (
 *            'type' => 'taxonomy',
 *            'name' => 'Uncategorized',
 *            'id' => 1,
 *            'url' => 'http://yourdomain.com/category/uncategorized/',
 *            'taxonomy' => 'category',
 *        ),
 *        2 => array (
 *            'name' => 'Post Article',
 *            'id' => 4781,
 *            'post_type' => 'post',
 *            'type' => 'post',
 *            'url' => 'http://yourdomain.com/post-article/',
 *        ),
 *    ),
 * @var string $separator , the separator symbol
 */
?>

<?php if ( ! empty( $items ) ) : ?>
	<ol class="breadcrumb">
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
				<li><?php echo $items[ $i ]['name'] ?></li>
				
			<?php elseif ( $i == 0 ) : ?>
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
					<li><a href="<?php echo esc_attr($items[ $i ]['url']) ?>"><?php echo $items[ $i ]['name'] ?></a></li>
				<?php else : echo $items[ $i ]['name'];?> <?php endif ?>
			<?php
    
			else : ?>
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
						<li><a href="<?php echo esc_attr($items[ $i ]['url']) ?>"><?php echo $items[ $i ]['name'] ?></a></li>
					<?php else : echo $items[ $i ]['name']; endif ?>
			<?php endif ?>
		<?php endfor ?>
	</ol>
<?php endif ?>