<?php
class AuthModel extends CI_Model
{
    public function login($username, $password)
    {
        $query = $this->db->get_where('users', ['username' => $username]);
        $user = $query->row();

        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            return true;
        }

        return false;
    }

    public function signup($username, $password)
    {
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ];

        return $this->db->insert('users', $data);
    }
}
