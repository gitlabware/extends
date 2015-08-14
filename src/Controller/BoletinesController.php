<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Boletines Controller
 *
 * @property \App\Model\Table\BoletinesTable $Boletines
 */
class BoletinesController extends AppController {

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->paginate = [
      'contain' => ['Clientes']
    ];
    $this->set('boletines', $this->paginate($this->Boletines));
    $this->set('_serialize', ['boletines']);
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
    debug($this->request->data);
    exit;
    $idCliente = $this->request->data['cliente_id'];
    $contactos = TableRegistry::get('Contactos');
    $cli_contactos = $contactos->find()->select(['id'])->where(['cliente_id' => $idCliente]); 
    if(!empty($this->request->data['noticias'])){
      $numero = $this->get_numero();
      foreach ($this->request->data['noticias'] as $not){
        $boletin = $this->Boletines->newEntity();
        $d_bol['numero'] = $numero;
        $d_bol['cliente_id'] = $idCliente;
        $boletin = $this->Boletines->patchEntity($boletin, $d_bol);
        $this->Boletines->save($boletin);
        
      }
    }
  }
  
  public function get_numero(){
    $boletin = $this->Boletines->find()->select(['numero'])->group(['numero'])->order(['numero' => 'DESC'])->limit(1)->toArray();
    
    if(!empty($boletin)){
      return $boletin[0]->numero + 1;
    }else{
      return 1;
    }
  }

}
