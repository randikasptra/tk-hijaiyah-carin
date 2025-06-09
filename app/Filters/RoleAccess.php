<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleAccess implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Belum login
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Cek role yang dibolehkan (misal ['admin'])
        if ($arguments) {
            $role = $session->get('user_role');
            if (!in_array($role, $arguments)) {
                return redirect()->to('/unauthorized');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Ga perlu
    }
}
