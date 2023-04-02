<?php
namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Auth;
use App\Services\Messages;

class ClientsController
{

    public function __construct()
    {
        if (!Auth::get()->isAuth()) {
            App::redirect('login');
            die;
        }
    }


    public function index()
    {
        $clients = (new Json)->showAll();

        return App::views('clients/index', [
            'title' => 'Clients List',
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return App::views('clients/create', [
            'title' => 'New Client'
        ]);
    }

    public function store()
    {
        if (strlen($_POST['name']) < 3 || strlen($_POST['surname']) < 3) {
            Messages::msg()->addMessage('Name or surname is too short', 'danger');
            return App::redirect('clients');
        }

        if (strlen($_POST['personal_id']) != 11) {
            Messages::msg()->addMessage('Personal ID must have 11 symbols', 'danger');
            return App::redirect('clients');
        }

        if (
            $_POST['personal_id'][0] != 1 && $_POST['personal_id'][0] != 2 &&
            $_POST['personal_id'][0] != 3 && $_POST['personal_id'][0] != 4 &&
            $_POST['personal_id'][0] != 5 && $_POST['personal_id'][0] != 6
        ) {
            Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
            return App::redirect('clients');
        }

        if (
            $_POST['personal_id'][1] != 1 && $_POST['personal_id'][1] != 2 &&
            $_POST['personal_id'][1] != 3 && $_POST['personal_id'][1] != 4 &&
            $_POST['personal_id'][1] != 5 && $_POST['personal_id'][1] != 6 &&
            $_POST['personal_id'][1] != 7 && $_POST['personal_id'][1] != 8 &&
            $_POST['personal_id'][1] != 9 && $_POST['personal_id'][1] != 0
        ) {
            Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
            return App::redirect('clients');
        }

        if (
            $_POST['personal_id'][2] != 1 && $_POST['personal_id'][2] != 2 &&
            $_POST['personal_id'][2] != 3 && $_POST['personal_id'][2] != 4 &&
            $_POST['personal_id'][2] != 5 && $_POST['personal_id'][2] != 6 &&
            $_POST['personal_id'][2] != 7 && $_POST['personal_id'][2] != 8 &&
            $_POST['personal_id'][2] != 9 && $_POST['personal_id'][2] != 0
        ) {
            Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
            return App::redirect('clients');
        }

        if ($_POST['personal_id'][3] != 0 && $_POST['personal_id'][3] != 1) {
            Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
            return App::redirect('clients');
        }

        if ($_POST['personal_id'][3] == 0) {
            if (
                $_POST['personal_id'][4] != 1 && $_POST['personal_id'][4] != 2 &&
                $_POST['personal_id'][4] != 3 && $_POST['personal_id'][4] != 4 &&
                $_POST['personal_id'][4] != 5 && $_POST['personal_id'][4] != 6 &&
                $_POST['personal_id'][4] != 7 && $_POST['personal_id'][4] != 8 &&
                $_POST['personal_id'][4] != 9
            ) {
                Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
                return App::redirect('clients');
            }
        } else {
            if (
                $_POST['personal_id'][4] != 1 && $_POST['personal_id'][4] != 2 &&
                $_POST['personal_id'][4] != 0
            ) {
                Messages::msg()->addMessage('Personal ID is incorrect', 'danger');
                return App::redirect('clients');
            }
        }

        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['personal_id'] = $_POST['personal_id'];
        $data['funds'] = 0;
        $data['account_no'] = 'LT'.rand(10, 99).'73000'.rand(100, 999).rand(1000, 9999).rand(1000, 9999);
        (new Json)->create($data);
        Messages::msg()->addMessage('New client was created', 'success');
        return App::redirect('clients');
    }

    public function show($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/show', [
            'title' => 'Client Page',
            'client' => $client
        ]);
    }

    public function edit($id)
    {
        $client = (new Json)->show($id);

        return App::views('clients/edit', [
            'title' => 'Edit Client',
            'client' => $client
        ]);
    }

    public function update($id)
    {
        $data = [];
        $data['name'] = $_POST['name'];
        $data['surname'] = $_POST['surname'];
        $data['personal_id'] = $_POST['personal_id'];
        $data['account_no'] = $_POST['account_no'];
        $data['funds'] = $_POST['funds'];
        (new Json)->update($id, $data);
        Messages::msg()->addMessage('Client was edited', 'warning');
        return App::redirect('clients');
    }

    public function delete($id)
    {
        $client = (new Json)->show($id);
        if ($client['funds'] > 0) {
            Messages::msg()->addMessage('Account has funds', 'warning');
            return App::redirect('clients');
        }
        (new Json)->delete($id);
        Messages::msg()->addMessage('The client gone', 'warning');
        return App::redirect('clients');
    }

    public function addFunds($id)
    {
        $client = (new Json)->show($id);

        return App::views('accounts/addFunds', [
            'title' => 'Client Page',
            'client' => $client
        ]);
    }

    public function storeAddFunds($id)
    {
        $client = (new Json)->show($id);
        $client['funds'] += $_POST['funds'];
        (new Json)->update($id, $client);
        Messages::msg()->addMessage('Funds was added', 'success');
        return App::redirect("clients/show/$id");
    }

    public function removeFunds($id)
    {
        $client = (new Json)->show($id);

        return App::views('accounts/removeFunds', [
            'title' => 'Client Page',
            'client' => $client
        ]);
    }

    public function storeRemoveFunds($id)
    {

        $client = (new Json)->show($id);
        if ($client['funds'] < $_POST['funds']) {
            Messages::msg()->addMessage('There are not enough funds', 'warning');
            return App::redirect("clients/show/$id");
        }
        $client['funds'] -= $_POST['funds'];
        (new Json)->update($id, $client);
        Messages::msg()->addMessage('Funds was removed', 'success');
        return App::redirect("clients/show/$id");
    }
}