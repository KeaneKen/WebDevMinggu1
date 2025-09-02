    <!-- Enumeration -->
<?php
// Declaration
enum InvoiceStatus 
{
    case Sent;
    case Paid;
    case Cancelled;
}

// The enum can then be use as a type
function printInvoiceStatus(InvoiceStatus $status)
{
    print($status->name);
}
printInvoiceStatus(InvoiceStatus::Sent); 
// Output: Sent

// enum with return value and public function exemple
enum InvoiceStatuss : int
{
    case Sent = 0;
    case Paid = 1;
    case Cancelled = 2;

    public function text() : string
    {
        return match ($this) {
            self::Sent => 'Sent',
            self::Paid => 'Paid',
            self::Cancelled => 'Cancelled'
        };
    }
}

//Example
function getInvoiceStatus(InvoiceStatuss $status) {
    print($status->text());   // Calls the custom function
    print($status->value);    // Accesses the int value
}
getInvoiceStatus(InvoiceStatuss::Paid);
// Output: Paid1
?>