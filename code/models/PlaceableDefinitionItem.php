<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class PlaceableDefinitionItem extends DataObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Definition Item';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Definition Items';

    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'Title' => 'Text',
        'Description' => 'Text'
    );

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            array(
                TextField::create(
                    'Title',
                    _t('Placeable.TITLE', 'Title')
                ),
                TextareaField::create(
                    'Description',
                    _t('Placeable.DESCRIPTION', 'Description')
                )
            )
        );
        return $fields;
    }
}
