<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;


/**
 * Users Controller
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

// 閲覧処理（全体閲覧）
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));

        // $user = $this->Auth->user();
        // $this->set('user', $user);
    }

// 閲覧処理（idごと閲覧）
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

// 登録処理
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'view/'.$user['id']]);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    // public function add()
    // {
    //     $article = $this->Articles->newEntity();
    //     if ($this->request->is('post')) {
    //         // 3.4.0 より前は $this->request->data() が使われました。
    //         $article = $this->Articles->patchEntity($article, $this->request->getData());
    //         // この行を追加
    //         $article->user_id = $this->Auth->user('id');
    //         // また、次のようにすることもできます
    //         //$newData = ['user_id' => $this->Auth->user('id')];
    //         //$article = $this->Articles->patchEntity($article, $newData);
    //         if ($this->Articles->save($article)) {
    //             $this->Flash->success(__('Your article has been saved.'));
    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('Unable to add your article.'));
    //     }
    //     $this->set('article', $article);
    //
    //     // 記事のカテゴリーを1つ選択できるようにカテゴリーリストを追加しました
    //     $categories = $this->Articles->Categories->find('treeList');
    //     $this->set(compact('categories'));
    // }

// 編集処理
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

// 削除処理
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

// ログイン処理
        /**
     * Login method
     */
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('/users/view/'.$user['id']));
            }
            $this->Flash->error('メールアドレスまたはパスワードが不正です。');
        }
    }

//ログアウト処理
        /**
     * logout method
     */
    public function logout()
    {
        $this->Flash->success('ログアウトしました。');
        return $this->redirect($this->Auth->logout());
    }

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
    }
    //
    //     if ($this->action === 'index') {
    //     return true;
    // }
    //
    // return parent::isAuthorized($user);
    // }

}
