<?php

/**
 * PHP version 7
 *
 * @category Cryptography
 * @package  Ubiq-PHP
 * @author   Ubiq Security <support@ubiqsecurity.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://gitlab.com/ubiqsecurity/ubiq-php
 */

namespace Ubiq;

/**
 * Public object in which to store Ubiq credentials
 *
 * @category Cryptography
 * @package  Ubiq-PHP
 * @author   Ubiq Security <support@ubiqsecurity.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://gitlab.com/ubiqsecurity/ubiq-php
 */
class Dataset
{
    public $name;
    public $type;

    public function __construct($dataset_name)
    {
        if (empty($dataset_name)) {
            $this->name = 'unnamed dataset';
            $this->type = DATASET_TYPE_UNSTRUCTURED;
        }
        else {
            $this->name = $dataset_name;
            $this->type = DATASET_TYPE_UNSTRUCTURED;
        }
    }
}
