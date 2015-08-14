<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contactosboletines Controller
 *
 * @property \App\Model\Table\ContactosboletinesTable $Contactosboletines
 */
class ContactosboletinesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contactos', 'Boletines']
        ];
        $this->set('contactosboletines', $this->paginate($this->Contactosboletines));
        $this->set('_serialize', ['contactosboletines']);
    }

    /**
     * View method
     *
     * @param string|null $id Contactosboletine id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactosboletine = $this->Contactosboletines->get($id, [
            'contain' => ['Contactos', 'Boletines']
        ]);
        $this->set('contactosboletine', $contactosboletine);
        $this->set('_serialize', ['contactosboletine']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactosboletine = $this->Contactosboletines->newEntity();
        if ($this->request->is('post')) {
            $contactosboletine = $this->Contactosboletines->patchEntity($contactosboletine, $this->request->data);
            if ($this->Contactosboletines->save($contactosboletine)) {
                $this->Flash->success(__('The contactosboletine has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contactosboletine could not be saved. Please, try again.'));
            }
        }
        $contactos = $this->Contactosboletines->Contactos->find('list', ['limit' => 200]);
        $boletines = $this->Contactosboletines->Boletines->find('list', ['limit' => 200]);
        $this->set(compact('contactosboletine', 'contactos', 'boletines'));
        $this->set('_serialize', ['contactosboletine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contactosboletine id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactosboletine = $this->Contactosboletines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactosboletine = $this->Contactosboletines->patchEntity($contactosboletine, $this->request->data);
            if ($this->Contactosboletines->save($contactosboletine)) {
                $this->Flash->success(__('The contactosboletine has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contactosboletine could not be saved. Please, try again.'));
            }
        }
        $contactos = $this->Contactosboletines->Contactos->find('list', ['limit' => 200]);
        $boletines = $this->Contactosboletines->Boletines->find('list', ['limit' => 200]);
        $this->set(compact('contactosboletine', 'contactos', 'boletines'));
        $this->set('_serialize', ['contactosboletine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contactosboletine id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactosboletine = $this->Contactosboletines->get($id);
        if ($this->Contactosboletines->delete($contactosboletine)) {
            $this->Flash->success(__('The contactosboletine has been deleted.'));
        } else {
            $this->Flash->error(__('The contactosboletine could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
