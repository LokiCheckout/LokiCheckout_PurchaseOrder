const {PaymentMethod, PlaceOrderButton, SuccessPage} = require(process.cwd() + '/helpers/checkout-objects');
const {setupCheckout} = require(process.cwd() + '/helpers/setup-checkout');
const {test} = require(process.cwd() + '/node_modules/@playwright/test');

test.describe('purchaseorder payment test', () => {
    test('should allow me to go to the success page', async ({page, context}) => {
        await setupCheckout(page, context, {
            profile: 'netherlands',
            config: {
                'yireo_loki_checkout/general/theme': 'onestep',
                'payment/purchaseorder/active': '1',
            }
        });

        const paymentMethod = new PaymentMethod(page, 'purchaseorder');
        await paymentMethod.select();

        const placeOrderButton = new PlaceOrderButton(page);
        await placeOrderButton.click();

        await new SuccessPage(page).expectToBeLoaded();
    });
});
