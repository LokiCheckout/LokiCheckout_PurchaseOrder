<?php declare(strict_types=1);

namespace Yireo\LokiCheckoutPurchaseOrder\Component\Checkout\Billing\PaymentMethod;

use Yireo\LokiCheckout\Component\Base\Generic\GenericContext;
use Yireo\LokiComponents\Component\ComponentRepository;

/**
 * @method GenericContext getContext()
 */
class PurchaseOrderRepository extends ComponentRepository
{
    protected function getData(): mixed
    {
        return (string)$this->getContext()->getCheckoutState()->getQuote()->getPayment()->getPoNumber();
    }

    protected function saveData(mixed $data): void
    {
        $quote = $this->getContext()->getCheckoutState()->getQuote();
        $quote->getPayment()->setPoNumber($data);
        $this->getContext()->getCheckoutState()->saveQuote($quote);
    }
}
