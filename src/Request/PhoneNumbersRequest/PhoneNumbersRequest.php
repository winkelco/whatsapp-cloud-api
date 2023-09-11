<?php

namespace Netflie\WhatsAppCloudApi\Request\PhoneNumbersRequest;

use Netflie\WhatsAppCloudApi\Request;

final class PhoneNumbersRequest extends Request
{
    /**
     * @var string WhatsApp Business Id.
     */
    private string $business_id;

    public function __construct(string $access_token, string $business_id, ?int $timeout = null)
    {
        $this->business_id = $business_id;

        parent::__construct($access_token, $timeout);
    }

    /**
     * Return WhatsApp Business Id for this request.
     *
     * @return string
     */
    public function businessId(): string
    {
        return $this->business_id;
    }

    /**
     * WhatsApp node path.
     *
     * @return string
     */
    public function nodePath(): string
    {
        return $this->business_id . '/phone_numbers';
    }
}
