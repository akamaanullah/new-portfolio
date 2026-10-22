<?php
namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller {
    public function index() {
        $data = [
            'page_title' => "Contact — Start a Project or Book a Call | Amaanullah",
            'page_desc'  => "Tell me about your project, timeline and budget. I reply within one business day.",
            'active_nav' => "contact",
            'page_css'   => "public/css/contact.css",
            'page_js'    => "public/js/contact.js"
        ];
        $this->view('contact/index', $data);
    }

    public function send() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('contact');
        }

        $name = sanitize($_POST['name'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $service = sanitize($_POST['service'] ?? '');
        $message = sanitize($_POST['message'] ?? '');

        if (empty($name) || empty($email) || empty($message)) {
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                return $this->json(['ok' => false, 'error' => 'Please fill in all required fields.'], 422);
            }
            $_SESSION['flash_error'] = 'Please fill in all required fields.';
            return $this->redirect('contact');
        }

        // Store via Model if database configured
        $contactModel = $this->model('ContactModel');
        if ($contactModel) {
            $contactModel->create([
                'name'    => $name,
                'email'   => $email,
                'service' => $service,
                'message' => $message,
                'ip'      => $_SERVER['REMOTE_ADDR'] ?? ''
            ]);
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            return $this->json(['ok' => true, 'message' => 'Thank you! Your message has been sent.']);
        }

        $_SESSION['flash_success'] = 'Thank you! Your message has been received.';
        $this->redirect('contact');
    }
}
