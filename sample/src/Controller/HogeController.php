<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hoge Controller
 *
 * @property \App\Model\Table\HogeTable $Hoge
 * @method \App\Model\Entity\Hoge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HogeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $hoge = $this->paginate($this->Hoge);

        $this->set(compact('hoge'));
    }

    /**
     * View method
     *
     * @param string|null $id Hoge id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hoge = $this->Hoge->get($id, [
            'contain' => [],
        ]);

        $this->set('hoge', $hoge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hoge = $this->Hoge->newEmptyEntity();
        if ($this->request->is('post')) {
            $hoge = $this->Hoge->patchEntity($hoge, $this->request->getData());
            if ($this->Hoge->save($hoge)) {
                $this->Flash->success(__('The hoge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoge could not be saved. Please, try again.'));
        }
        $this->set(compact('hoge'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hoge id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hoge = $this->Hoge->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hoge = $this->Hoge->patchEntity($hoge, $this->request->getData());
            if ($this->Hoge->save($hoge)) {
                $this->Flash->success(__('The hoge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hoge could not be saved. Please, try again.'));
        }
        $this->set(compact('hoge'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hoge id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hoge = $this->Hoge->get($id);
        if ($this->Hoge->delete($hoge)) {
            $this->Flash->success(__('The hoge has been deleted.'));
        } else {
            $this->Flash->error(__('The hoge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
