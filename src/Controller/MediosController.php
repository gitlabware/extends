<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Medios Controller
 *
 * @property \App\Model\Table\MediosTable $Medios
 */
class MediosController extends AppController {

  public $layout = 'extends';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->set('medios', $this->paginate($this->Medios));
    $this->set('_serialize', ['medios']);
  }

  /**
   * View method
   *
   * @param string|null $id Medio id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $medio = $this->Medios->get($id, [
      'contain' => ['Noticias']
    ]);
    $this->set('medio', $medio);
    $this->set('_serialize', ['medio']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    $medio = $this->Medios->newEntity();
    if ($this->request->is('post')) {
      $medio = $this->Medios->patchEntity($medio, $this->request->data);
      debug($medio);die;
      if ($this->Medios->save($medio)) {
        $this->Flash->success(__('The medio has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The medio could not be saved. Please, try again.'));
      }
    }

    $this->set(compact('medio'));
    $this->set('_serialize', ['medio']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Medio id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $medio = $this->Medios->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $medio = $this->Medios->patchEntity($medio, $this->request->data);
      if ($this->Medios->save($medio)) {
        $this->Flash->success(__('The medio has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The medio could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('medio'));
    $this->set('_serialize', ['medio']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Medio id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $medio = $this->Medios->get($id);
    if ($this->Medios->delete($medio)) {
      $this->Flash->success(__('The medio has been deleted.'));
    } else {
      $this->Flash->error(__('The medio could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function ajaxformedio($tipomedio = null) {
    $this->layout = 'ajax';
    $medio = $this->Medios->newEntity();

    if ($this->request->is('post')) {
      //debug($this->request->data);die;
      $medio = $this->Medios->patchEntity($medio, $this->request->data);
      if ($this->Medios->save($medio)) {
        //$this->Flash->success(__('The medio has been saved.'));
        //return $this->redirect(['action' => 'index']);
      } else {
        //$this->Flash->error(__('The medio could not be saved. Please, try again.'));
      }
    }
    $cdd = ['La Paz' => 'La Paz', 'Cochabamba' => 'Cochabamba', 'Santa Cruz' => 'Santa Cruz', 'Pando' => 'Pando', 'Beni' => 'Beni', 'Oruro' => 'Oruro', 'Potosi' => 'Potosi', 'Tarija' => 'Tarija'];
    $this->set(compact('medio', 'tipomedio', 'cdd'));
    $this->set('_serialize', ['medio']);
  }

  public function ajaxactselect($tipo = null) {
    $this->layout = 'ajax';
    //$dcm = TableRegistry::get('Medios')->find();    
    $medios = TableRegistry::get('Medios');
    $dcm = $medios->find('all', [
      'conditions' => ['Medios.tipo' => 'Impreso'],
      'order'=>['Medios.nombre ASC']
    ]);
    $this->set(compact('dcm'));
    //echo $tipo;
    //debug($articles);
  }

}
