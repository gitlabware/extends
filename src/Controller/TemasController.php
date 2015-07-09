<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Temas Controller
 *
 * @property \App\Model\Table\TemasTable $Temas
 */
class TemasController extends AppController {

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->set('temas', $this->paginate($this->Temas));
    $this->set('_serialize', ['temas']);
  }

  /**
   * View method
   *
   * @param string|null $id Tema id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $tema = $this->Temas->get($id, [
      'contain' => ['Noticias']
    ]);
    $this->set('tema', $tema);
    $this->set('_serialize', ['tema']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $tema = $this->Temas->newEntity();
    if ($this->request->is('post')) {
      $tema = $this->Temas->patchEntity($tema, $this->request->data);
      if ($this->Temas->save($tema)) {
        $this->Flash->success(__('The tema has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The tema could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('tema'));
    $this->set('_serialize', ['tema']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Tema id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $tema = $this->Temas->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $tema = $this->Temas->patchEntity($tema, $this->request->data);
      if ($this->Temas->save($tema)) {
        $this->Flash->success(__('The tema has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The tema could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('tema'));
    $this->set('_serialize', ['tema']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Tema id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $tema = $this->Temas->get($id);
    if ($this->Temas->delete($tema)) {
      $this->Flash->success(__('The tema has been deleted.'));
    } else {
      $this->Flash->error(__('The tema could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function ajaxformtema() {
    
    $this->layout = 'ajax';
    $tema = $this->Temas->newEntity();
    if ($this->request->is('post')) {
      //debug($this->request->data);die;
      $tema = $this->Temas->patchEntity($tema, $this->request->data);
      if ($this->Temas->save($tema)) {
        //$this->Flash->success(__('The tema has been saved.'));
        //return $this->redirect(['action' => 'index']);
      } else {
        //$this->Flash->error(__('The tema could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('tema'));
    $this->set('_serialize', ['tema']);
    
  }
  
  public function ajaxactselect(){
    $this->layout = 'ajax';
    //$dcm = TableRegistry::get('Medios')->find();    
    $temas = TableRegistry::get('Temas');
    $dct = $temas->find('all', [
      //'conditions' => ['Medios.tipo' => 'Impreso'],
      'order'=>['Temas.nombre ASC']
    ]);
    $this->set(compact('dct'));
    //echo $tipo;
    //debug($articles);
  }

}
