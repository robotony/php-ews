<?php
/**
 * Definition of the SmartResponseBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SmartResponseBaseType type
 */
class EWSType_SmartResponseBaseType extends EWSType
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * ToRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * From property
     *
     * @var EWSType_SingleRecipientType
     */
    public $From;

    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Subject',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Body',
                'required' => false,
                'type' => 'BodyType',
            ),
            array(
                'name' => 'ToRecipients',
                'required' => false,
                'type' => 'ArrayOfRecipientsType',
            ),
            array(
                'name' => 'CcRecipients',
                'required' => false,
                'type' => 'ArrayOfRecipientsType',
            ),
            array(
                'name' => 'BccRecipients',
                'required' => false,
                'type' => 'ArrayOfRecipientsType',
            ),
            array(
                'name' => 'IsReadReceiptRequested',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsDeliveryReceiptRequested',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'From',
                'required' => false,
                'type' => 'SingleRecipientType',
            ),
            array(
                'name' => 'ReferenceItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'ObjectName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
