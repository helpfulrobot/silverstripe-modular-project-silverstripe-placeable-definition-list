<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class DefinitionListBlock extends BlockObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Definition list';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Definition lists';

    /**
     * Many_many relationship
     * @var array
     */
    private static $many_many = array(
        'DefinitionList' => 'PlaceableDefinitionItem',
    );

    /**
     * {@inheritdoc }
     * @var array
     */
    private static $many_many_extraFields = array(
        'DefinitionList' => array(
            'Sort' => 'Int'
        )
    );

    /**
     * CMS Page Fields
     * @return FieldList
     */
    public function getCMSPageFields()
    {
        $fields = parent::getCMSPageFields();
        $fields->addFields(
            array(
                GridField::create(
                    'DefinitionList',
                    _t('DefinitionListBlock.LIST', 'Definition list'),
                    $this->DefinitionList(),
                    GridFieldConfig_RelationEditor::create()
                        ->addComponent(new GridFieldOrderableRows())
                )
            )
        );
        $this->extend('updateCMSPageFields', $fields);
        return $fields;
    }
}
class DefinitionListBlock_Controller extends BlockObject_Controller
{
    public function init() {
        parent::init();
    }
}
class DefinitionListBlock_Preset extends BlockObject_Preset
{

}
