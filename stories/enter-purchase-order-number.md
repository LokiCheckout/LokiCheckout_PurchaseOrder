---
status: complete
---

# Enter a purchase order number in the checkout

**As a** business customer,  
**I want to** enter my purchase order number when I pay with the Purchase Order method,  
**So that** my order can be processed against the correct PO.

## Acceptance Criteria

### when-purchase-order-method-is-selected

**Given** the Purchase Order payment method is enabled and available in the checkout  
**When** I select it as my payment method  
**Then** a text field with the label "Purchase Order Number" is shown underneath the payment method  
**And** the field carries the name `po_number`  
**And** the field is only rendered for the Purchase Order payment method, not for the other payment methods.

### when-purchase-order-number-is-entered

**Given** the Purchase Order payment method is selected  
**When** I fill in a purchase order number and leave the input field  
**Then** the value is stored on the cart payment (`quote_payment.po_number`)  
**And** the value is shown again in the field when the checkout is reloaded.

### when-purchase-order-number-is-changed

**Given** a purchase order number was already entered  
**When** I replace it with another number  
**Then** the new value replaces the stored purchase order number.

### when-no-purchase-order-number-is-entered

**Given** I select the Purchase Order payment method without filling in a number  
**When** the checkout is shown  
**Then** the field is empty  
**And** the module does not mark the field as required, so no required-field message is shown while filling in the checkout.
