<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Text;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 */
class NoticiasController extends AppController {

  public $layout = 'extends';

  public function beforeFilter(Event $event) {
    parent::beforeFilter($event);
    //$this->Auth->allow('add', 'login'. 'logout  ');
  }

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
      //debug($this->request->params);      
      /* debug($this->request->data);
        die; */
      $clientes = $this->request->data['clientes'];
      $notis = $this->request->data['data'];
      $tipos = $this->request->data['tipo'];
      //debug($clientes);

      foreach ($clientes as $c) {
        //debug($c);
        //$this->request->data['Noticia']['fecha']=$this->request->data['fecha'];
        foreach ($notis as $key => $n) {
          //debug($n);
          if ($n['medio_id'] != 0) {
            $noticia = $this->Noticias->newEntity();
            $this->request->data['Noticia']['fecha'] = $this->request->data['fecha'];
            $this->request->data['Noticia']['medio_id'] = $n['medio_id'];
            $this->request->data['Noticia']['tema_id'] = $n['tema_id'];
            $this->request->data['Noticia']['cliente_id'] = $c;
            $this->request->data['Noticia']['tipo'] = $n['tipo_id'];
            $this->request->data['Noticia']['notaprensa'] = $this->request->data['notaprensa'];
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
            $resnot = $this->Noticias->save($noticia);
            $this->guarda_adjuntos($key, $resnot->id);
            $this->Flash->msgbueno('Se registro correctamente la noticia!!','msgbueno');


            //$noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
//            if ($this->Noticias->save($noticia)) {
//              $this->Flash->msgbueno(__('The noticia has been saved.'));
//              return $this->redirect(['action' => 'listado']);
//            } else {
//              $this->Flash->msgerror(__('The noticia could not be saved. Please, try again.'));
//            }
          }
        }
      }
      $this->redirect(['action' => 'listado']);
    }
    //$modelMedios = new Medio;

    $medios = TableRegistry::get('Medios');
    $dcm = $medios->find('all', [
      'conditions' => ['Medios.tipo' => 'Impreso'],
      'order' => ['Medios.nombre ASC']
    ]);

    //debug($dcm->toArray());

    $dcmd = $medios
      ->find()
      ->where(['tipo' => 'Digital'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmr = $medios
      ->find()
      ->where(['tipo' => 'Radio'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmt = $medios
      ->find()
      ->where(['tipo' => 'Tv'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmf = $medios
      ->find()
      ->where(['tipo' => 'Fuente'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    //debug($dcmd);die;

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
    $this->set(compact('noticia', 'dcm', 'dct', 'dcc', 'dcmd', 'dcmr', 'dcmt', 'dcmf'));
    $this->set('_serialize', ['noticia']);
  }

  public function guarda_adjuntos($key = null, $idNoticia = null) {
    $adjuntos = TableRegistry::get('Adjuntos');
    $adjuntos->deleteAll(['noticia_id' => $idNoticia]);
    $da = $this->request->data['data'][$key];
    if (!empty($da['adjuntos'])) {
      foreach ($da['adjuntos'] as $key2 => $pr) {
        if (!empty($pr['archivo'])) {
          $archivo = $pr['archivo'];
          $extension = explode('.', $archivo['name']);
          $ext = end($extension);
          if ($archivo['error'] === UPLOAD_ERR_OK) {
            $nombre = Text::uuid();
            if (move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'adjuntos' . DS . $nombre . '.' . $ext)) {
              $nombre_archivo = $nombre . '.' . $ext;
              $this->request->data['data'][$key]['adjuntos'][$key2]['url_int'] = $nombre_archivo;
              $this->request->data['data'][$key]['adjuntos'][$key2]['archivo'] = NULL;
              $adjuntos = TableRegistry::get('Adjuntos');
              $adjunto = $adjuntos->newEntity();
              $d_adjunto['url_int'] = $nombre_archivo;
              $d_adjunto['noticia_id'] = $idNoticia;
              $adjunto = $adjuntos->patchEntity($adjunto, $d_adjunto);
              $adjuntos->save($adjunto);
            }
          } else {
             $this->Flash->msgerror('Ocurrio un error al cargar el adjunto '.$archivo['name']);
              $this->redirect($this->referer()); 
          }
        } elseif (!empty($pr['url_int'])) {
          $adjuntos = TableRegistry::get('Adjuntos');
          $adjunto = $adjuntos->newEntity();
          $d_adjunto['url_int'] = $pr['url_int'];
          $d_adjunto['noticia_id'] = $idNoticia;
          $adjunto = $adjuntos->patchEntity($adjunto, $d_adjunto);
          $adjuntos->save($adjunto);
        } else {
          $adjuntos = TableRegistry::get('Adjuntos');
          $adjunto = $adjuntos->newEntity();
          $d_adjunto['url_ext'] = $pr['url'];
          $d_adjunto['noticia_id'] = $idNoticia;
          $adjunto = $adjuntos->patchEntity($adjunto, $d_adjunto);
          $adjuntos->save($adjunto);
        }
      }
    }
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
        //debug($this->request->data);exit;
      $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
      if ($this->Noticias->save($noticia)) {
        $tipo = $this->request->data['tipo_id'];
        if ($tipo == "Impreso") {
          $key = 0;
        } elseif ($tipo == "Digital") {
          $key = 1;
        } elseif ($tipo == "Radio") {
          $key = 2;
        } elseif ($tipo == "Tv") {
          $key = 3;
        } elseif ($tipo == "Fuente") {
          $key = 4;
        }
        
        $this->guarda_adjuntos($key, $id);
        $this->Flash->msgbueno(__('The noticia has been saved.'));
        return $this->redirect(['action' => 'listado']);
      } else {
        $this->Flash->msgerror(__('The noticia could not be saved. Please, try again.'));
      }
    }

    //debug($noticia->toArray());exit;
    $clientes = TableRegistry::get('Clientes');
    $adjuntos = TableRegistry::get('Adjuntos');
    $adjuntos_n = $adjuntos->find()->where(['noticia_id' => $id])->toArray();

    $l_clientes = $clientes->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);

    $medios = TableRegistry::get('Medios');
    $medios->displayField('nombre_ciudad');
    $dcm = $medios
      ->find('list')
      ->where(['tipo' => 'Impreso'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmd = $medios
      ->find('list')
      ->where(['tipo' => 'Digital'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmr = $medios
      ->find('list')
      ->where(['tipo' => 'Radio'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmt = $medios
      ->find('list')
      ->where(['tipo' => 'Tv'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    $dcmf = $medios
      ->find('list')
      ->where(['tipo' => 'Fuente'])
      ->order(['nombre' => 'ASC'])
      ->toArray();

    //debug($dcmd);die;
    $temas = TableRegistry::get('Temas');
    $temas->displayField('nombre');
    $dct = $temas->find('list')->order(['nombre' => 'ASC']);
    /* debug($l_clientes->toArray());
      exit; */
    $this->set(compact('noticia', 'l_clientes', 'dcmf', 'dcmt', 'dcmr', 'dcmd', 'dcm', 'dct', 'adjuntos_n'));
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
    $noticia = $this->Noticias->get($id);
    if ($this->Noticias->delete($noticia)) {
      $this->Flash->msgbueno(__('The noticia has been deleted.'));
    } else {
      $this->Flash->msgerror(__('The noticia could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'listado']);
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
      'contain' => ['Clientes', 'Temas', 'Medios']
    ]);
    $dcm = TableRegistry::get('Medios')->find('all', [
      'order' => ['Medios.nombre ASC']
    ]);

    $dcc = TableRegistry::get('Clientes')->find('all', [
      'order' => ['Clientes.nombre ASC']
    ]);
    $clientes = TableRegistry::get('Clientes');
    $l_clientes = $clientes->find('list')->toArray();
    //debug($l_clientes);die;
    $this->set(compact('noticias', 'dcm', 'dcc','l_clientes'));
    //$this->set('_serialize', ['noticias']);
  }
  
  public function genera_boletin(){
    debug($this->request->data);
    exit;
    
  }

}
