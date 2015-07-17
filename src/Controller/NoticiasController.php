<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 */
class NoticiasController extends AppController {

  public $layout = 'extends';

  /**
   * Index method
   *
   * @return void
   */
  public function index() {
    $this->set('noticias', $this->paginate($this->Noticias));
    $this->set('_serialize', ['noticias']);
  }

  /**
   * View method
   *
   * @param string|null $id Noticia id.
   * @return void
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function view($id = null) {
    $noticia = $this->Noticias->get($id, [
      'contain' => []
    ]);
    $this->set('noticia', $noticia);
    $this->set('_serialize', ['noticia']);
  }

  /**
   * Add method
   *
   * @return void Redirects on successful add, renders view otherwise.
   */
  public function add() {
    if ($this->request->is('post')) {
      //debug($this->request->data);
      $clientes = $this->request->data['clientes'];
      $notis = $this->request->data['data'];
      $tipos = $this->request->data['tipo'];
      //debug($clientes);

      foreach ($clientes as $c) {
        //debug($c);
        //$this->request->data['Noticia']['fecha']=$this->request->data['fecha'];
        foreach ($notis as $n) {
          //debug($n);
          if ($n['medio_id'] != 0) {
            $noticia = $this->Noticias->newEntity();
            $this->request->data['Noticia']['fecha'] = $this->request->data['fecha'];
            $this->request->data['Noticia']['medio_id'] = $n['medio_id'];
            $this->request->data['Noticia']['tema_id'] = $n['tema_id'];
            $this->request->data['Noticia']['cliente_id'] = $c;
            $this->request->data['Noticia']['tipo'] = $n['tipo_id'];
            $this->request->data['Noticia']['notaprensa'] = $this->request->data['notapresa'];
            $this->request->data['Noticia']['codigo'] = $this->request->data['codigo'];
            $this->request->data['Noticia']['clasificacion'] = $this->request->data['clasificacion'];
            $this->request->data['Noticia']['seccion'] = empty($n['seccion']) ? 'NULL' : $n['seccion'];
            $this->request->data['Noticia']['pagina'] = empty($n['pagina']) ? 'NULL' : $n['pagina'];
            $this->request->data['Noticia']['titulo'] = empty($n['titulo']) ? 'NULL' : $n['titulo'];
            $this->request->data['Noticia']['genero'] = empty($n['genero']) ? 'NULL' : $n['genero'];
            $this->request->data['Noticia']['web'] = empty($n['web']) ? 'NULL' : $n['web'];
            $this->request->data['Noticia']['fuente'] = empty($n['fuente']) ? 'NULL' : $n['fuente'];
            $this->request->data['Noticia']['alias'] = empty($n['alias']) ? 'NULL' : $n['alias'];
            $this->request->data['Noticia']['riesgo'] = empty($n['riesgo']) ? 'NULL' : $n['riesgo'];
            $this->request->data['Noticia']['descripcion'] = empty($n['descripcion']) ? 'NULL' : $n['descripcion'];
            $this->request->data['Noticia']['tendencia'] = empty($n['tendencia']) ? 'NULL' : $n['tendencia'];
            $this->request->data['Noticia']['longitud'] = 0;
            $this->request->data['Noticia']['costo'] = 0;
            //debug($this->request->data['Noticia']);die;
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data['Noticia']);
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
              $this->Flash->success(__('The noticia has been saved.'));
              return $this->redirect(['action' => 'listado']);
            } else {
              $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
          }
        }
      }
    }
    //$modelMedios = new Medio;

    $medios = TableRegistry::get('Medios');
    $dcm = $medios->find('all', [
      'conditions' => ['Medios.tipo' => 'Impreso'],
      'order' => ['Medios.nombre ASC']
    ]);

    $dct = TableRegistry::get('Temas')->find('all', [
      'order' => ['Temas.nombre ASC']
    ]);

    $dcc = TableRegistry::get('Clientes')->find('all', [
      'order' => ['Clientes.nombre ASC']
    ]);
    //$dct = $temas->find();
    //$dcm = $modelMedios->find('all');      
    //$dcm = $this->Medios->find('all');
    //debug($dct->toArray());die();
    $noticia = $this->Noticias->newEntity();
    $this->set(compact('noticia', 'dcm', 'dct', 'dcc'));
    $this->set('_serialize', ['noticia']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Noticia id.
   * @return void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null) {
    $noticia = $this->Noticias->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
      if ($this->Noticias->save($noticia)) {
        $this->Flash->success(__('The noticia has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
      }
    }
    $this->set(compact('noticia'));
    $this->set('_serialize', ['noticia']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Noticia id.
   * @return void Redirects to index.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $noticia = $this->Noticias->get($id);
    if ($this->Noticias->delete($noticia)) {
      return $this->Flash->success(__('The noticia has been deleted.'));
    } else {
      $this->Flash->error(__('The noticia could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

  public function login() {
    $this->layout = 'login';
    if ($this->request->is('post')) {
      //debug($this->request->data);die;
      $this->redirect(['action' => 'add']);
    }
  }

  public function listado() {
    $noticias = TableRegistry::get('Noticias')->find('all', [
      'order' => ['Noticias.id DESC'],
      'contain'=>['Clientes', 'Temas', 'Medios'] 
    ]);
    //debug($noticias->toArray());die;
    $this->set(compact('noticias'));
  }

}
