<?php declare(strict_types=1);

namespace Yireo\LokiCheckoutPurchaseOrder\Component\Checkout\Billing\PaymentMethod;

use Yireo\LokiCheckout\Component\Base\Generic\CheckoutContext;
use Yireo\LokiCheckout\Component\Base\Generic\CheckoutViewModel;

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
