---
status: complete
---

# Show the purchase order number in the checkout summary

**As a** customer,  
**I want to** see the purchase order number in the payment details of the checkout summary,  
**So that** I can verify it before placing my order.

## Acceptance Criteria

### when-purchase-order-number-is-set

**Given** a purchase order number is stored on the cart  
**When** the sidebar preview with the payment details is rendered  
**Then** a "PO Number" line is shown with the purchase order number as its value  
**And** the purchase order number is HTML-escaped.

### when-no-purchase-order-number-is-set

**Given** no purchase order number is stored on the cart  
**When** the sidebar preview with the payment details is rendered  
**Then** no "PO Number" line is shown at all  
**And** a purchase order number of `0` is treated as no purchase order number.

### when-purchase-order-number-is-changed

**Given** the sidebar preview shows a purchase order number  
**When** I change the number in the payment method form  
**Then** the "PO Number" line in the sidebar preview is refreshed with the new value without a full page reload.
