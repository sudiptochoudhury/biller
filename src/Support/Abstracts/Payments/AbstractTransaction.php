<?php

namespace SudiptoChoudhury\Biller\Support\Abstracts\Payments;

abstract class AbstractTransaction
{
    public $id;
    public $amount;
    public $date; // initiated, processed
    public $status; // provider transaction id, status code, error code, message
    public $transactor; // user
    public $type; // sale, void, refund, decline, test
    public $method; // ach, card, paypal
    public $gateway; // stripe, authorize.net, braintree, zoho
    public $order; // order id, invoice id, line items, products,
    public $document;// invoice, credit node
    public $mode; // manual, auto
    public $notes; // notes


    public function calculate() {

    }

    public function get() {

    }

    public function getDetails() {

    }

}
