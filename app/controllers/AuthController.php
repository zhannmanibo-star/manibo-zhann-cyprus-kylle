<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UserModel');
    }

    public function login()
    {
        if ($this->session->userdata('authenticated')) {
            $this->response->redirect(site_url('products'));
        }

        $data['error'] = $this->session->flashdata('error');
        $this->call->view('auth/login', $data);
    }

    public function authenticate()
    {
        $username = trim($this->request->post('username'));
        $password = $this->request->post('password');

        $user = $this->UserModel->find_by_username($username);

        if (!$user || !password_verify($password, $user['password'])) {
            $this->session->set_flashdata(
                'error',
                'Invalid username or password.'
            );

            $this->response->redirect(site_url('login'));
        }

        $this->session->regenerate_on_login(true);

        $this->session->set_userdata([
            'authenticated' => true,
            'user_id'       => $user['id'],
            'username'      => $user['username'],
            'role'          => $user['role'] ?? 'user'
        ]);

        $this->response->redirect(site_url('products'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->response->redirect(site_url('login'));
    }
}