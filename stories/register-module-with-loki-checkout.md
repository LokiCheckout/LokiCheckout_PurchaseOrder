---
status: complete
---

# Register the Purchase Order module with Loki Checkout

**As a** shop owner,  
**I want to** install the Purchase Order add-on next to the Loki Checkout,  
**So that** the checkout can offer a purchase order number field for the Purchase Order payment method.

## Acceptance Criteria

### when-module-is-registered

**Given** the module `LokiCheckout_PurchaseOrder` is enabled  
**When** the Magento dependency injection container is built  
**Then** the module is added to the list of Loki Checkout modules (`LokiCheckout\Core\Config\LokiCheckoutModules`) via `etc/di.xml`  
**And** the module is loaded after `LokiCheckout_Core`, `Loki_Components`, `Loki_CssUtils`, `Loki_FieldComponents` and `Magento_Store` (sequence in `etc/module.xml`).

### when-package-is-installed

**Given** I install the package with composer  
**When** I require `loki-checkout/magento2-purchase-order`  
**Then** the package pulls in `loki-checkout/magento2-core`, `loki/magento2-components`, `loki/magento2-css-utils` and `loki/magento2-field-components`  
**And** the module is enabled with `bin/magento module:enable LokiCheckout_PurchaseOrder`  
**And** the package is labelled "Purchase Order" and tagged with the keyword `loki-checkout-category-payment`.

### when-components-are-provided

**Given** the module is enabled  
**When** the Loki Checkout renders its payment methods and its sidebar  
**Then** the component `loki-checkout.payment.methods.purchaseorder.form` is available  
**And** the component `loki-checkout.sidebar.preview.payment_details.purchaseorder` is available  
**And** both components use the checkout context, the `PurchaseOrderViewModel` and the `PurchaseOrderRepository` of this module.
