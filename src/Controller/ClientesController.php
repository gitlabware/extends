<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 */
class ClientesController extends AppController {

  public $layout = 'extends';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->set('clientes', $this->paginate($this->Clientes));
    $this->set('_serialize', ['clientes']);
  }

  /**
   * View method
   *
   * @param string|null $id Cliente id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $cliente = $this->Clientes->get($id, [
      'contain' => []
    ]);
    $this->set('cliente', $cliente);
    $this->set('_serialize', ['cliente']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $cliente = $this->Clientes->newEntity();
    if ($this->request->is('post')) {
      debug($this->request->data);
      die();
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      if ($this->Clientes->save($cliente)) {
        $this->Flash->success(__('The cliente has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('cliente'));
    $this->set('_serialize', ['cliente']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Cliente id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $cliente = $this->Clientes->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      if ($this->Clientes->save($cliente)) {
        $this->Flash->success(__('The cliente has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('cliente'));
    $this->set('_serialize', ['cliente']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Cliente id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $cliente = $this->Clientes->get($id);
    if ($this->Clientes->delete($cliente)) {
      $this->Flash->success(__('The cliente has been deleted.'));
    } else {
      $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function ajaxformcliente() {

    $this->layout = 'ajax';
    $cliente = $this->Clientes->newEntity();

    if ($this->request->is('post')) {
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      if ($this->Clientes->save($cliente)) {
        //$this->Flash->success(__('The cliente has been saved.'));
        $this->redirect(['controller' => 'Noticias', 'action' => 'add']);
      } else {
        //$this->Flash->error(__('The cliente could not be saved. Please, try again.'));
      }
    }

    $this->set(compact('cliente'));
    $this->set('_serialize', ['cliente']);
  }

  public function ajaxformcliente2($div = null) {

    $this->layout = 'ajax';
    $cliente = $this->Clientes->newEntity();

    if ($this->request->is('post')) {
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      $resultado = $this->Clientes->save($cliente);
      $idCliente = $resultado->id;
      $this->autoRender = false;
      $this->response->type('json');

      $json = json_encode(array('id' => $idCliente));
      $this->response->body($json);
      //exit;
    }

    $this->set(compact('cliente', 'div'));
    $this->set('_serialize', ['cliente']);
  }

  public function ajaxclientes($idCliente = null) {
    $this->layout = 'ajax';
    $this->Clientes->displayField('nombre');
    $l_clientes = $this->Clientes->find('list')->order(['nombre' => 'ASC']);
    $this->set(compact('l_clientes','idCliente'));
  }

  public function ajaxmulclientes() {

    $this->layout = 'ajax';
    $dcc = TableRegistry::get('Clientes')->find('all', [
      'order' => ['Clientes.nombre ASC']
    ]);
    $this->set(compact('dcc'));
  }

}
