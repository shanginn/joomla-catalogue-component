<?php

defined('_JEXEC') or die;

class CatalogueViewSearch extends JViewLegacy
{
    protected $items;

    protected $state;

    public function display($tpl = null)
    {
        $model = $this->getModel();
        $this->items = $this->get('Items');
        $this->state = $this->get('State');

        parent::display($tpl);
    }
}