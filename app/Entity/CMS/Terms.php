<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Terms extends Page {
    const TITLE = 'Terms And Conditions';

    const CMS_NAME = 'Terms And Conditions';
    const CMS_INFO = 'Konten halaman terms and condition';
    const CMS_SITEMAP = 'Home -> Terms And Conditions';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'bannerTitle' => 'Text',
        'bannerImage' => 'Image_1',
        'description' => 'Wysiwyg',
        'agreementText' => 'TextArea'
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

    ];

    const FORM_SELECT_LIST = [

    ];


}
