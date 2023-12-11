<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
    }

    public function download()
    {
        $this->response =
            $this->response->withFile(WWW_ROOT . 'uploads/registroasistencia.apk')
            ->withType('application/vnd.android.package-archive');
        return $this->response;
    }
}
