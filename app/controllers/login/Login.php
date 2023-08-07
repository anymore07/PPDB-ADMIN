<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Login extends Controller
{
    public static string $SECRET_KEY = "ZHxTsCPhncHnBWhsRUatdumctOidOum9";
    private $model_name = "Login";

    public function index()
    {
        if (isset($_COOKIE['PPDB-SESSION'])) {
            header("Location: " . BASEURL);
        }

        $data['judul'] = 'PPDB - Login';

        $this->view('login/head', $data);
        $this->view('login/index');
        $this->view('login/foot');
    }

    public function logProccess()
    {
        // Validasi username dan password
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $SuperAdmin = $this->model("$this->model_name", "Login_model")->loginSuperAdmin($data);
            $Admin = $this->model("$this->model_name", "Login_model")->loginAdmin($data);
            $Operator = $this->model("$this->model_name", "Login_model")->loginOperator($data);
            if ($SuperAdmin) {
                if ($this->model("$this->model_name", "Login_model")->log($SuperAdmin['id']) > 0) {
                    // Jika validasi berhasil, buat token JWT
                    $payload = [
                        'sub' => $SuperAdmin['id'],
                        'name' => $SuperAdmin['username'],
                        'role' => $SuperAdmin['role'],
                        'akses' => $SuperAdmin['hak_akses'],
                        'iat' => time(),
                        'exp' =>  time() + (7 * 24 * 60 * 60) // Token berlaku selama 1 hari
                    ];
                    Cookie::create_jwt($payload, $payload['exp']);
                    // Kirim token JWT sebagai respons
                    Flasher::setFlash('BERHASIL', 'Login', 'success');
                    header("Location: " . BASEURL);
                }
            } else if ($Admin) {
                // Jika validasi berhasil, buat token JWT
                $payload = [
                    'sub' => $Admin['id'],
                    'name' => $Admin['nama_Admin'],
                    'role' => 'Admin',
                    'akses' => '',
                    'iat' => time(),
                    'exp' =>  time() + (7 * 24 * 60 * 60) // Token berlaku selama 1 hari
                ];
                Cookie::create_jwt($payload, $payload['exp']);
                // Kirim token JWT sebagai respons
                Flasher::setFlash('BERHASIL', 'Login', 'success');
                header("Location: " . BASEURL);
            } else if ($Operator) {
                // Jika validasi berhasil, buat token JWT
                $payload = [
                    'sub' => $Operator['id'],
                    'name' => $Operator['nama_lengkap'],
                    'role' => 'Operator',
                    'akses' => '',
                    'iat' => time(),
                    'exp' =>  time() + (7 * 24 * 60 * 60) // Token berlaku selama 1 hari
                ];
                Cookie::create_jwt($payload, $payload['exp']);
                // Kirim token JWT sebagai respons
                Flasher::setFlash('BERHASIL', 'Login', 'success');
                header("Location: " . BASEURL);
                
            } else {
                Flasher::setFlash('GAGAL', 'Login', 'danger');
                header("Location: " . BASEURL . "/login");
            }
        }
    }
}