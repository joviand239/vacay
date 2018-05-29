<?php

namespace App\Util;

class Constant {
    const YES = 'Y';
    const NO = 'N';

    const USER_ROLE_ADMIN = 'ADMIN';
    const USER_ROLE_CUSTOMER = 'CUSTOMER';
    const USER_ROLE_CUSTOMERBIZ = 'CUSTOMERBIZ';

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const STATUS_PENDING = 'PENDING';
    const STATUS_PRINTING = 'PRINTING';
    const STATUS_PAID = 'PAID';
    const STATUS_UNPAID = 'UNPAID';
    const STATUS_DELIVERY = 'DELIVERY';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_CANCELLED = 'CANCELLED';

    const ORDER_TYPE_REGULAR = 'REGULAR';
    const ORDER_TYPE_COLLECT = 'COLLECT';
    const ORDER_TYPE_CUSTOM = 'CUSTOM';

    const SEARCH_TYPE_ALL = 'All';
    const SEARCH_TYPE_CONTINENT = 'Continent';
    const SEARCH_TYPE_COUNTRY = 'Country';


    const ENQUIRY_GENERAL = 'GENERAL';
    const ENQUIRY_SERVICE_AND_PRODUCT = 'SERVICE_AND_PRODUCT';
    const ENQUIRY_BOOKING = 'BOOKING';
    const ENQUIRY_REFUNDS = 'REFUNDS';
    const ENQUIRY_FEEDBACK = 'FEEDBACK';
    const ENQUIRY_WEBSITE = 'WEBSITE';
    const ENQUIRY_MEMBERSHIP = 'MEMBERSHIP';
    const ENQUIRY_CORPORATE = 'CORPORATE';
    const ENQUIRY_MARKETING_AND_MEDIA = 'MARKETING_AND_MEDIA';
    const ENQUIRY_COMMUNITY_AND_SPONSORSHIP = 'COMMUNITY_AND_SPONSORSHIP';


    const OPTION_LABEL_ENQUIRY = [
        self::ENQUIRY_GENERAL => 'General Enquiry',
        self::ENQUIRY_SERVICE_AND_PRODUCT => 'Service & Product Enquiry',
        self::ENQUIRY_BOOKING => 'Bookings Enquiry',
        self::ENQUIRY_REFUNDS => 'Refunds Enquiry',
        self::ENQUIRY_FEEDBACK => 'Feedback',
        self::ENQUIRY_WEBSITE => 'Website Enquiry',
        self::ENQUIRY_MEMBERSHIP => 'Membership Enquiry',
        self::ENQUIRY_CORPORATE => 'Corporate Enquiry',
        self::ENQUIRY_MARKETING_AND_MEDIA => 'Marketing & Media Enquiry',
        self::ENQUIRY_COMMUNITY_AND_SPONSORSHIP => 'Community & Sponsorship Enquiry',
    ];
}