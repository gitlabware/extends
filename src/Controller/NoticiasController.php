<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 */
class NoticiasController extends AppController
{
  public $layout = 'extends';

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
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
    public function view($id = null)
    {
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
    public function add()
    {
        $noticia = $this->Noticias->newEntity();
        if ($this->request->is('post')) {
          debug($this->request->data);die;
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->data);
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('The noticia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The noticia could not be saved. Please, try again.'));
            }
        }
        //$modelMedios = new Medio;
        
        $medios = TableRegistry::get('Medios');
        $dcm = $medios->find('all', [
          'conditions'=>['Medios.tipo'=>'Impreso'],
          'order'=>['Medios.nombre ASC']
        ]);
        
        $dct = TableRegistry::get('Temas')->find('all',[
          'order'=>['Temas.nombre ASC']
        ]);
        //$dct = $temas->find();
        //$dcm = $modelMedios->find('all');      
        //$dcm = $this->Medios->find('all');
        //debug($dct->toArray());die();
                
        $this->set(compact('noticia', 'dcm', 'dct'));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
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
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('The noticia has been deleted.'));
        } else {
            $this->Flash->error(__('The noticia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
      $this->layout='login';
      if($this->request->is('post')){
        //debug($this->request->data);die;
        $this->redirect(['action'=>'add']);
      }
    }
    
    public function listado()
    {
      
    }
}
