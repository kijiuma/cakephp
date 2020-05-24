<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;


/**
 * Contacts Controller
 *
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $this->set('contacts', $this->Contacts->find('all'));
        // $contacts = $this->Contacts->find()
        // ->select(['id','contact'])
        // ->where(['id'=>2]);
        // dd($contacts);
    
        $contacts = $this->paginate($this->Contacts->find()->where(['id'=>'id']));

        $this->set(compact('contacts'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => [],
        ]);

        $this->set('contact', $contact);
    }
///////////////////////////
    /**
    * Add method
    *
    * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
    */

    // public function add($id = null)
    // {
    // $contact = $this->Contacts->get($id, [
    //     'contain' => [],
    // ]);
    // if ($this->request->is(['patch', 'post', 'put'])) {
    //     $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
    //     if ($this->Contacts->save($contact)) {
    //         $this->Flash->success(__('The contact has been saved.'));
    //
    //         return $this->redirect(['action' => 'view/'.$user['id']]);
    //     }
    //     $this->Flash->error(__('The contact could not be saved. Please, try again.'));
    // }
    // $this->set(compact('contact'));
    // }

      // 登録処理
    public function add()
    {
    $contact = $this->Contacts->newEmptyEntity();
    if ($this->request->is('post')) {
        $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
        if ($this->Contacts->save($contact)) {
            $this->Flash->success(__('The contact has been saved.'));

            return $this->redirect(['action' => 'view/'.$contact['id']]);
        }
        $this->Flash->error(__('The contact could not be saved. Please, try again.'));
    }
    $this->set(compact('contact'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contact = $this->Contacts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('The contact has been saved.'));

                return $this->redirect(['action' => 'view/'.$contact['id']]);
            }
            $this->Flash->error(__('The contact could not be saved. Please, try again.'));
        }
        $this->set(compact('contact'));
    }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Contact id.
    //  * @return \Cake\Http\Response|null|void Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $contact = $this->Contacts->get($id);
    //     if ($this->Contacts->delete($contact)) {
    //         $this->Flash->success(__('The contact has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The contact could not be deleted. Please, try again.'));
    //     }
    //
    //     return $this->redirect(['action' => 'index']);
    // }
    // 認証なし処理
        /**
         * beforeFilter method
         */
        public function beforeFilter(EventInterface  $event)
        {
             parent::beforeFilter($event);
             $this->Auth->allow(['logout', 'add',]);
        }
        /**
         * isAuthorized method
         */
        public function isAuthorized($user)
        {
            $id = $this->request->getParam('pass.0');
            if ($id == $user['id']) {
                return true;
            }
                return false;

        // public function isAuthorized($user)
        // {
        //     $id = $this->request->getParam('pass.0');
        //     $role = $this->request->getParam('rorle');
        //
        //     var_dump($id);
        //     var_dump($user['email']);
        //
        //     if($user['role'] == '0' ) {
        //         return true;
        //     }elseif($user['role'] == '1' || $id == $user['id']){
        //       return true;
        //     }
        //     return false;

            // $id = $this->request->getParam('pass.0');
// var_dump($role);
// var_dump($user['role']);

            // if($id == $user['id'] && $role == $role['role'] ) {
            //     return true;
            // }
            // return false;


            // if ($this->request->getParam('action') === 'add') {
            // var_dump($this->request->getParam('action'));
              // return true;
            // }
        }
        // var_dump($id);
        // var_dump($user['role']);
}
