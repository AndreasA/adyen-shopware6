<?php
/**
 *                       ######
 *                       ######
 * ############    ####( ######  #####. ######  ############   ############
 * #############  #####( ######  #####. ######  #############  #############
 *        ######  #####( ######  #####. ######  #####  ######  #####  ######
 * ###### ######  #####( ######  #####. ######  #####  #####   #####  ######
 * ###### ######  #####( ######  #####. ######  #####          #####  ######
 * #############  #############  #############  #############  #####  ######
 *  ############   ############  #############   ############  #####  ######
 *                                      ######
 *                               #############
 *                               ############
 *
 * Adyen Payment Module
 *
 * Copyright (c) 2020 Adyen B.V.
 * This file is open source and available under the MIT license.
 * See the LICENSE file for more info.
 *
 * Author: Adyen <shopware@adyen.com>
 */

namespace Adyen\Shopware\PaymentMethods;

class PaymentMethods
{
    const PAYMENT_METHODS = [
        CardsPaymentMethod::class,
        IdealPaymentMethod::class,
        KlarnaAccountPaymentMethod::class,
        KlarnaPayNowPaymentMethod::class,
        KlarnaPayLaterPaymentMethod::class,
        SepaPaymentMethod::class,
        SofortPaymentMethod::class,
        PaypalPaymentMethod::class,
        OneClickPaymentMethod::class,
        GiroPayPaymentMethod::class,
        ApplePayPaymentMethod::class,
        GooglePayPaymentMethod::class,
        DotpayPaymentMethod::class,
        BancontactCardPaymentMethod::class,
    ];
}
