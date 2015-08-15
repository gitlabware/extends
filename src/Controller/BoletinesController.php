<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;

/**
 * Boletines Controller
 *
 * @property \App\Model\Table\BoletinesTable $Boletines
 */
class BoletinesController extends AppController {

  public $layout = 'extends';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $boletines = $this->Boletines->find()->contain(['Clientes'])->select(['Clientes.nombre','numero','created'])->group('numero')->toArray();
    $this->set(compact('boletines'));
  }

  /**
   * View method
   *
   * @param string|null $id Boletine id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $boletine = $this->Boletines->get($id, [
      'contain' => ['Clientes', 'Contactosboletines']
    ]);
    $this->set('boletine', $boletine);
    $this->set('_serialize', ['boletine']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $boletine = $this->Boletines->newEntity();
    if ($this->request->is('post')) {
      $boletine = $this->Boletines->patchEntity($boletine, $this->request->data);
      if ($this->Boletines->save($boletine)) {
        $this->Flash->success(__('The boletine has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The boletine could not be saved. Please, try again.'));
      }
    }
    $clientes = $this->Boletines->Clientes->find('list', ['limit' => 200]);
    $this->set(compact('boletine', 'clientes'));
    $this->set('_serialize', ['boletine']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Boletine id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $boletine = $this->Boletines->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $boletine = $this->Boletines->patchEntity($boletine, $this->request->data);
      if ($this->Boletines->save($boletine)) {
        $this->Flash->success(__('The boletine has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The boletine could not be saved. Please, try again.'));
      }
    }
    $clientes = $this->Boletines->Clientes->find('list', ['limit' => 200]);
    $this->set(compact('boletine', 'clientes'));
    $this->set('_serialize', ['boletine']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Boletine id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $boletine = $this->Boletines->get($id);
    if ($this->Boletines->delete($boletine)) {
      $this->Flash->success(__('The boletine has been deleted.'));
    } else {
      $this->Flash->error(__('The boletine could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function genera_boletin() {
    /* debug($this->request->data);
      exit; */
    $idCliente = $this->request->data['cliente_id'];
    $contactos = TableRegistry::get('Contactos');
    $cont_bolets = TableRegistry::get('Contactosboletines');
    $cli_contactos = $contactos->find()->select(['id'])->where(['cliente_id' => $idCliente]);
    if (!empty($this->request->data['noticias'])) {
      $numero = $this->get_numero();
      foreach ($this->request->data['noticias'] as $not) {
        $boletin = $this->Boletines->newEntity();
        $d_bol['numero'] = $numero;
        $d_bol['cliente_id'] = $idCliente;
        $d_bol['noticia_id'] = $idCliente;
        $boletin = $this->Boletines->patchEntity($boletin, $d_bol);
        $resultado = $this->Boletines->save($boletin);
      }
      foreach ($cli_contactos as $cl) {
        $cont_bolet = $cont_bolets->newEntity();
        $d_con['contacto_id'] = $cl->id;
        $d_con['numero'] = $numero;
        $d_con['estado'] = 1;
        $d_con['enviado'] = 0;
        $cont_bolet = $cont_bolets->patchEntity($cont_bolet, $d_con);
        $cont_bolets->save($cont_bolet);
      }
      $this->Flash->msgbueno('Se genero correctamente el boletin!!');
      $this->redirect(['action' => 'listado', $numero]);
    } else {
      $this->Flash->msgerror('No se selecciono ningna noticia!!!');
      $this->redirect($this->referer());
    }
  }

  public function listado($numero = null) {
    $l_boletines = $this->Boletines->find()
        ->contain(['Noticias', 'Clientes'])
        ->select(['Noticias.titulo', 'Boletines.created', 'Clientes.id', 'Clientes.nombre', 'Boletines.numero'])
        ->where(['numero' => $numero])->toArray();
    $contactos = TableRegistry::get('Contactosboletines');
    $cliente = current($l_boletines);
    $l_contactos = $contactos->find()->contain(['Contactos'])->select(['Contactos.nombre', 'Contactos.email', 'estado', 'id'])->where(['numero' => $numero])->toArray();
    
    $this->set(compact('l_boletines', 'l_contactos', 'cliente'));
    /* debug($l_contactos);
      debug($l_boletines);
      exit; */
  }

  public function get_numero() {
    $boletin = $this->Boletines->find()->select(['numero'])->group(['numero'])->order(['numero' => 'DESC'])->limit(1)->toArray();
    if (!empty($boletin)) {
      return $boletin[0]->numero + 1;
    } else {
      return 1;
    }
  }

  public function envia() {
    
    Email::configTransport('gmail', [
      'host' => 'mail.cristiamherrera.net',
      'port' => 26,
      'username' => 'extend@cristiamherrera.net',
      'password' => '123extend456',
      'className' => 'Smtp'
    ]);
    
    $email = new Email();
    
    $email->viewVars(['value' => 12345]);
    $email->transport('gmail');
    $email->template('prueba')->emailFormat('html')->from(['extend@cristiamherrera.net' => 'My Site'])
      ->to('eynarfrio@gmail.com')
      ->subject('PRUEBA')
      ->send();

    debug($email);
    exit;
  }

}
