<?php

namespace Safcom\Mpesa\Facades;

use Safcom\Mpesa\Mpesa as MpesaGateway;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Safcom\Mpesa\Mpesa stkpush($phonenumber, $amount, $account_number,$callbackurl = null)
 * @method static \Safcom\Mpesa\Mpesa stkquery($checkoutRequestId)
 * @method static \Safcom\Mpesa\Mpesa b2c($phonenumber, $command_id, $amount, $remarks)
 * @method static \Safcom\Mpesa\Mpesa b2b($receiver_shortcode, $command_id, $amount, $remarks, $account_number=null)
 * @method static \Safcom\Mpesa\Mpesa validated_b2c($phonenumber, $command_id, $amount, $remarks,$id_number)
 * @method static \Safcom\Mpesa\Mpesa c2bregisterURLS($shortcode)
 * @method static \Safcom\Mpesa\Mpesa c2bsimulate($phonenumber, $amount, $shortcode, $command_id, $account_number = null)
 * @method static \Safcom\Mpesa\Mpesa transactionStatus($shortcode, $transactionid, $identiertype, $remarks)
 * @method static \Safcom\Mpesa\Mpesa accountBalance($shortcode, $identiertype, $remarks)
 * @method static \Safcom\Mpesa\Mpesa reversal($shortcode, $transactionid, $amount, $remarks)
 * @method static \Safcom\Mpesa\Mpesa validationResponse($result_code, $result_description)
 *
 * @see MpesaGateway
 */
class Mpesa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'safcom-mpesa';
    }
}
