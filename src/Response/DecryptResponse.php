<?php
/*
 * This file is part of the GestPayWS library.
 *
 * (c) Manuel Dalla Lana <endelwar@aregar.it>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EndelWar\GestPayWS\Response;

use EndelWar\GestPayWS\Parameter\DecryptParameter;

/**
 * Class DecryptResponse
 * @package EndelWar\GestPayWS
 */
class DecryptResponse extends Response
{
    protected $parametersName = array(
        // Mandatory
        'TransactionType',
        'TransactionResult',
        'ShopTransactionID',
        'BankTransactionID',
        'AuthorizationCode',
        'Currency',
        'Amount',
        'ErrorCode',
        'ErrorDescription',

        // Optional
        'Country',
        'CustomInfo',
        'Buyer', // contains BuyerName and BuyerEmail
        'TDLevel',
        'AlertCode',
        'AlertDescription',
        'CVVPresent',
        'MaskedPAN',
        'PaymentMethod',
        'TOKEN',
        'ProductType',
        'TokenExpiryMonth',
        'TokenExpiryYear',
        'TransactionKey',
        'VbV',
        'VbVRisp',
        'VbVBuyer',
        'VbVFlag'
    );

    public function __construct($soapResponse)
    {
        $xml = simplexml_load_string($soapResponse->DecryptResult->any);
        parent::__construct($xml);
    }
}