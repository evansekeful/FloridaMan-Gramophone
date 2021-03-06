<?php
/**
 *******************************************************************************
 * //woocommerce/order/order-details-item.php
 *******************************************************************************
 *
 * Order details
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
}

$order = wc_get_order( $order_id );

$show_purchase_note    = $order->has_status( apply_filters( 'woocommerce_purchase_note_order_statuses', array( 'completed', 'processing' ) ) );
$show_customer_details = is_user_logged_in() && $order->get_user_id() === get_current_user_id();

?>
<div class="col-sm-12">
<h4><?php _e( 'Order Details', 'woocommerce' ); ?></h4>
<table class="shop_table order_details table table-hover">

    <thead class="thead-inverse">
        <tr>
            <th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
            <th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach( $order->get_items() as $item_id => $item ) 
            {
                $product = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
                $purchase_note = get_post_meta( $product->id, '_purchase_note', true );

                wc_get_template( 'order/order-details-item.php', array(
                'order'         => $order,
                'item_id'       => $item_id,
                'item'          => $item,
                'show_purchase_note'  => $show_purchase_note,
                'purchase_note'     => $purchase_note,
                'product'       => $product,
                ) );
            }
        ?>
        <?php do_action( 'woocommerce_order_items_table', $order ); ?>
    </tbody>

    <tfoot>
        <?php
            foreach ( $order->get_order_item_totals() as $key => $total ) 
            {
            ?>
                <tr>
                    <th scope="row"><?php echo $total['label']; ?></th>
                    <td><?php echo $total['value']; ?></td>
                </tr>
            <?php
            }
        ?>
    </tfoot>

</table>
</div>
<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<?php if ( $show_customer_details ) : ?>
    <?php wc_get_template( 'order/order-details-customer.php', array( 'order' =>  $order ) ); ?>
<?php endif; ?>
