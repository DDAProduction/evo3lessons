<?php

namespace EvolutionCMS\Main\Controllers;

use Illuminate\Support\Facades\Cache;
use EvolutionCMS\Models\SiteContent;

class BaseController
{
    public $data = [];

    public function __construct()
    {
        $this->evo = EvolutionCMS();
        ksort($_GET);
        $cacheid = md5(json_encode($_GET));
        if ($this->evo->getConfig('enable_cache')) {
            $this->data = Cache::rememberForever($cacheid, function () {
                $this->globalElements();
                $this->render();
                return $this->data;
            });
        } else {
            $this->globalElements();
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }

    public function render()
    {
        $this->data['test'] = 'test';
    }

    public function noCacheRender()
    {

    }

    public function globalElements()
    {
        $this->data['menu'] = SiteContent::GetRootTree(2)
            ->where('site_content.hidemenu', 0)
            ->get()
            ->toTree()
            ->toArray();

        $this->data['parentIds'] = SiteContent::ancestorsWithSelfOf($this->evo->documentIdentifier)
            ->pluck('id')
            ->toArray();
    }

    public function sendToView()
    {
        $this->evo->addDataToView($this->data);
    }
}