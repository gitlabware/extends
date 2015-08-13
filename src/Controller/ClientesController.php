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
    //debug('ssss');exit;
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
      /*debug($this->request->data);
      die();*/
      $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
      if (empty($cliente->errors())) {
        $resultado = $this->Clientes->save($cliente);
        $idCliente = $resultado->id;
        if (!empty($this->request->data['contactos'])) {
          
          $contactos = TableRegistry::get('Contactos');
          $dat_con['cliente_id'] = $idCliente;
          foreach ($this->request->data['contactos'] as $con) {
            $contacto = $contactos->newEntity();
            $dat_con['nombre'] = $con['campos'][0];
            $dat_con['cargo'] = $con['campos'][1];
            $dat_con['email'] = $con['campos'][2];
            $dat_con['celular'] = $con['campos'][3];
            $contacto = $contactos->patchEntity($contacto, $dat_con);
            $contactos->save($contacto);
          }
        }
        $this->Flash->msgbueno('Se registro correctamente el cliente!!','msgbueno');
        $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->msgerror(current(current($cliente->errors())));
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
    $cliente = $this->Clientes->get($id);
    if ($this->Clientes->delete($cliente)) {
      $contactos = TableRegistry::get('Contactos');
      $contactos->deleteAll(['cliente_id' => $id]);
      $this->Flash->msgbueno('Se elimino correctamente el cliente!!');
    } else {
      $this->Flash->msgerror('No se pudo eliminar al cliente!!!');
    }
    return $this->redirect(['action' => 'index']);
  }
  public function delete_contacto($id = null) {
    $contactos = TableRegistry::get('Contactos');
    $contacto = $contactos->get($id);
    if ($contactos->delete($contacto)) {
      
      $this->Flash->msgbueno('Se elimino correctamente!!');
    } else {
      $this->Flash->msgerror('No se pudo eliminar intente nuevamente!!');
    }
    return $this->redirect($this->referer());
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
    $this->set(compact('l_clientes', 'idCliente'));
  }

  public function ajaxmulclientes() {

    $this->layout = 'ajax';
    $dcc = TableRegistry::get('Clientes')->find('all', [
      'order' => ['Clientes.nombre ASC']
    ]);
    $this->set(compact('dcc'));
  }
  
  public function contactos($idCliente = null){
    $cliente = $this->Clientes->get($idCliente);
    $contactos = TableRegistry::get('Contactos');
    $l_contactos = $contactos->find()->where(['cliente_id' => $idCliente]);
    $this->set(compact('l_contactos','cliente'));
  }
  
  public function contacto($idCliente = null,$idContacto = null){
    $this->layout = 'ajax';
    
    $cliente = $this->Clientes->get($idCliente);
    $contactos = TableRegistry::get('Contactos');
    if(!empty($idContacto)){
      $contacto = $contactos->get($idContacto);
    }else{
      $contacto = $contactos->newEntity();
    }
    if (!empty($this->request->data)){
      $contacto = $contactos->patchEntity($contacto, $this->request->data);
      if (empty($contacto->errors())){
        $contactos->save($contacto);
        $this->Flash->msgbueno('Se registro correctamente el contacto!!');
      }else{
        $this->Flash->msgerror(current(current($contacto->errors())));
      }
      $this->redirect($this->referer());
    }
    $this->set(compact('cliente','contacto'));
  }

}
