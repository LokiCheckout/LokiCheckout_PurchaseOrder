<?php declare(strict_types=1);

namespace LokiCheckout\PurchaseOrder\Component\Checkout\Billing\PaymentMethod;

use LokiCheckout\Core\Component\Base\Generic\CheckoutContext;
use Loki\Components\Component\ComponentRepository;

/**
 * @method CheckoutContext getContext()
 */
class PurchaseOrderRepository extends ComponentRepository
{
    public function getValue(): mixed
    {
        return (string)$this->getContext()->getCheckoutState()->getQuote()->getPayment()->getPoNumber();
    }

    public function saveValue(mixed $value): void
    {
        $value = (string)$value;
        $quote = $this->getContext()->getCheckoutState()->getQuote();
        $quote->getPayment()->setPoNumber($value);
        $this->getContext()->getCheckoutState()->saveQuote($quote);
    }
}
