<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Experience extends Page {
    const TITLE = 'Vacay Experience';

    const CMS_NAME = 'Vacay Experience';
    const CMS_INFO = 'Konten vacay experience';
    const CMS_SITEMAP = 'Home -> Our Services -> Vacay Experience';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'tabTitle' => 'Text',
        'logoIcon' => 'Image_1',
        'logoIconHover' => 'Image_1',
        'title' => 'Text',
        'description' => 'Wysiwyg',
        'experienceTitle' => 'Text',
        'experienceDescription' => 'TextArea',
        'experienceQuote' => 'TextArea',
        'experienceAuthor' => 'Text',
        'inclusionList' => 'ListSortable',
        'exclusionList' => 'ListSortable'
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
        'inclusionList' => [
            'textName' => 'Text'
        ],
        'exclusionList' => [
            'textName' => 'Text'
        ],
    ];

    const FORM_SELECT_LIST = [

    ];


}
