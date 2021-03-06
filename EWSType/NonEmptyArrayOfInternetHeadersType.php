<?php
/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfInternetHeadersType type
 */
class EWSType_NonEmptyArrayOfInternetHeadersType extends EWSType
{
    /**
     * InternetMessageHeader property
     *
     * @var EWSType_InternetHeaderType
     */
    public $InternetMessageHeader;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'InternetMessageHeader',
                'required' => false,
                'type' => 'InternetHeaderType',
            ),
        );
    }
}
