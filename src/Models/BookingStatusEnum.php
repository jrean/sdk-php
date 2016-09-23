<?php
/*
 * BeMyGuestAPIV1Lib
 *
 * This file was automatically generated for BeMyGuest by APIMATIC v2.0 ( https://apimatic.io ) on 09/23/2016
 */

namespace BeMyGuestAPIV1Lib\Models;

/**
 * Available booking statuses for the updateBooking request
 */
class BookingStatusEnum {
    /**
     * Confirms given booking
     */
    const CONFIRM = "confirm";

    /**
     * Cancels given booking
     */
    const CANCEL = "cancel";

    /**
     * If confirmationEmailSentAt value is not null then copy of the confirmation email sent to partner will be sent again and the timestamp value of this field will be updated
     */
    const RESEND = "resend";

}