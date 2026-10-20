---
status: complete
---

# Place an order with a purchase order number

**As a** customer,  
**I want to** place my order with the Purchase Order payment method and my purchase order number,  
**So that** my order is confirmed and carries my PO reference.

## Acceptance Criteria

### when-order-is-placed-with-a-purchase-order-number

**Given** the Purchase Order payment method is selected and a purchase order number is filled in  
**When** I place the order  
**Then** the order is placed successfully and the success page is shown  
**And** the purchase order number is carried over to the order payment (`sales_order_payment.po_number`).

### when-no-purchase-order-number-is-entered

**Given** the Purchase Order payment method is selected and no purchase order number is filled in  
**When** I place the order  
**Then** Magento refuses to place the order with the message "Purchase order number is a required field."  
**And** an error message is shown and I am returned to the checkout instead of the success page.
