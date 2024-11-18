<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MachinesGames Controller
 *
 * @property \App\Model\Table\MachinesGamesTable $MachinesGames
 * @method \App\Model\Entity\MachinesGame[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MachinesGamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Machines', 'Games'],
        ];
        $machinesGames = $this->paginate($this->MachinesGames);

        $this->set(compact('machinesGames'));
    }

    /**
     * View method
     *
     * @param string|null $id Machines Game id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $machinesGame = $this->MachinesGames->get($id, [
            'contain' => ['Machines', 'Games'],
        ]);

        $this->set(compact('machinesGame'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $machinesGame = $this->MachinesGames->newEmptyEntity();
        if ($this->request->is('post')) {
            $machinesGame = $this->MachinesGames->patchEntity($machinesGame, $this->request->getData());
            if ($this->MachinesGames->save($machinesGame)) {
                $this->Flash->success(__('The machines game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The machines game could not be saved. Please, try again.'));
        }
        $machines = $this->MachinesGames->Machines->find('list', ['limit' => 200])->all();
        $games = $this->MachinesGames->Games->find('list', ['limit' => 200])->all();
        $this->set(compact('machinesGame', 'machines', 'games'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Machines Game id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $machinesGame = $this->MachinesGames->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $machinesGame = $this->MachinesGames->patchEntity($machinesGame, $this->request->getData());
            if ($this->MachinesGames->save($machinesGame)) {
                $this->Flash->success(__('The machines game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The machines game could not be saved. Please, try again.'));
        }
        $machines = $this->MachinesGames->Machines->find('list', ['limit' => 200])->all();
        $games = $this->MachinesGames->Games->find('list', ['limit' => 200])->all();
        $this->set(compact('machinesGame', 'machines', 'games'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Machines Game id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $machinesGame = $this->MachinesGames->get($id);
        if ($this->MachinesGames->delete($machinesGame)) {
            $this->Flash->success(__('The machines game has been deleted.'));
        } else {
            $this->Flash->error(__('The machines game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
