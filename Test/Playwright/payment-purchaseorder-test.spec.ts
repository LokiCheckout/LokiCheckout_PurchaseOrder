import {PaymentMethod, PlaceOrderButton, SuccessPage} from '@loki/checkout-objects';
import {setupCheckout} from '@loki/setup-checkout';
import {test, expect} from '@loki/test';

test.describe('purchaseorder payment test', () => {
    test('should allow me to go to the success page', async ({page, context}) => {
        await setupCheckout(page, context, {
            modules: [
                'LokiCheckout_PurchaseOrder'
            ],
            profile: 'netherlands',
            config: {
                'loki_checkout/general/theme': 'onestep',
                'payment/purchaseorder/active': '1',
            }
        });

        const paymentMethod = new PaymentMethod(page, 'purchaseorder');
        await paymentMethod.select();

        const purchaseOrderNumber = await page.getByTestId('loki-checkout-payment-payment-methods-purchaseorder-form-field');
        await purchaseOrderNumber.fill('foobar');

        const placeOrderButton = new PlaceOrderButton(page);
        await placeOrderButton.click();

        await new SuccessPage(page).expectToBeLoaded();
    });

    test('should give an error without additional input', async ({page, context}) => {
        await setupCheckout(page, context, {
            modules: [
                'LokiCheckout_PurchaseOrder'
            ],
            profile: 'netherlands',
            config: {
                'loki_checkout/general/theme': 'onestep',
                'payment/purchaseorder/active': '1',
            }
        });

        const paymentMethod = new PaymentMethod(page, 'purchaseorder');
        await paymentMethod.select();

        const placeOrderButton = new PlaceOrderButton(page);
        await placeOrderButton.click();

        const messages = await page.getByTestId('loki-components-global-messages');
        await expect(messages).toHaveText(/Purchase order number is a required field/);
    });
});
