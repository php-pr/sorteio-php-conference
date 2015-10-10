<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * Participantes Controller
 *
 * @property \App\Model\Table\ParticipantesTable $Participantes
 */
class ParticipantesController extends AppController
{

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participante = $this->Participantes->newEntity();
        if ($this->request->is('post')) {

            if ($this->checkReCaptcha($this->request->data['g-recaptcha-response'])) {
                
                $participante = $this->Participantes->patchEntity($participante, $this->request->data);
                if ($this->Participantes->save($participante)) {
                    $this->Flash->success('Cadastro realizado com sucesso, boa sorte!!!');
                    return $this->redirect(['action' => 'add']);
                } else {
                    $this->Flash->error('Não foi possível efetuar o cadastro. Certifique-se de não o ter realizado anteriormente, veja em sua caixa de email algo com o título: "Sorteio PHP PR"');
                }
            } else {
                $this->Flash->error('Captcha inválido ou expirado.');
            }
        }
        $this->set(compact('participante'));
        $this->set('_serialize', ['participante']);
    }

    private function checkReCaptcha($reCaptchaResponse)
    {
        $reCaptchaConfig = Configure::read('reCaptcha');
        
        $data = [
            'response' => $reCaptchaResponse,
            'secret' => $reCaptchaConfig['secretKey'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];
        
        $ch = curl_init($reCaptchaConfig['urlVerification']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
        $reCaptchaVerificationResponse = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($reCaptchaVerificationResponse, true);
        
        return $response['success'] === true;
    }

}
