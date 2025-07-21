<?php declare(strict_types=1);

namespace LokiCheckout\PurchaseOrder\Component\Checkout\Billing\PaymentMethod;

use LokiCheckout\Core\Component\Base\Generic\CheckoutContext;
use LokiCheckout\Core\Component\Base\Generic\CheckoutViewModel;

/**
 * @method CheckoutContext getContext()
 */
class PurchaseOrderViewModel extends CheckoutViewModel
{
    public function getFieldName(): string
    {
        return 'po_number';
    }

    public function getFieldLabel(): string
    {
        return (string)__('Purchase Order Number');
    }
}
