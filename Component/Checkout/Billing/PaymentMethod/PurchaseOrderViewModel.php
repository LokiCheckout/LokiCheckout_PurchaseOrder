<?php declare(strict_types=1);

namespace Yireo\LokiCheckoutPurchaseOrder\Component\Checkout\Billing\PaymentMethod;

use Yireo\LokiCheckout\Component\Base\Field\FieldViewModel;
use Yireo\LokiCheckout\Component\Base\Generic\GenericContext;

/**
 * @method GenericContext getContext()
 */
class PurchaseOrderViewModel extends FieldViewModel
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
