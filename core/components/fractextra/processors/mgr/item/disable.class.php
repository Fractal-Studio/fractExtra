<?php

class fractExtraItemDisableProcessor extends modObjectProcessor
{
    public $objectType = 'fractExtraItem';
    public $classKey = 'fractExtraItem';
    public $languageTopics = ['fractextra'];
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('fractextra_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var fractExtraItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('fractextra_item_err_nf'));
            }

            $object->set('active', false);
            $object->save();
        }

        return $this->success();
    }

}

return 'fractExtraItemDisableProcessor';
