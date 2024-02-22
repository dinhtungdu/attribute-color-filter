<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
$wrapper_attributes = get_block_wrapper_attributes(
        array(
            'class' => "style-{$attributes['displayStyle']}",
        )
    );
?>

<div <?php echo $wrapper_attributes; ?>">
    <div class="terms">
      		<?php foreach ( $block->context['filterOptions'] as $option ) : ?>
                    <?php $uid = $option['id'] ?? uniqid(); ?>
                    <div class="term <?php echo empty( $option['checked'] ) ? '' : ' selected' ?>">
                        <input id='<?php echo $uid; ?>' type="checkbox" value="<?php echo $option['value']; ?>" data-wc-on--change="woocommerce/product-filter-attribute::actions.updateProducts" />
                        <label for='<?php echo $uid; ?>'>
                            <span class="color" style="background-color: <?php echo $attributes['termColors'][$option['attrs']['term_id']] ?? '#eee'; ?>;"></span>
                            <span class="name"><?php echo $option['label']; ?></span>
                        </label>
                    </div>
      		<?php endforeach; ?>
    </div>
</div>
