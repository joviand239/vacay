<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class FeaturedTestimonial extends Page {
    const TITLE = 'Featured Testimonial';

    const CMS_NAME = 'Featured Testimonial';
    const CMS_INFO = 'List testimonial homepage';
    const CMS_SITEMAP = 'Featured Testimonial';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'listing' => 'ListSortable'
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];

    const FORM_LIST = [
        'listing' => [
            'sourceName' => 'Text',
            'designation' => 'Text',
            'details' => 'TextArea',
        ]
    ];

    const FORM_SELECT_LIST = [

    ];


}
