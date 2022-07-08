<?php

namespace App\Http\Livewire;

use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Repositories\FormContactRepository;

class ContactForm extends Component
{
    public $repo;

    public $name;
    public $phone;
    public $email;
    public $message;
    public $google_recaptcha_token;

    protected $listeners = ['setGoogleRecaptchaToken'];

    public function boot(FormContactRepository $repo)
    {
        $this->repo = $repo->first();
    }

    public function setGoogleRecaptchaToken($token)
    {
        $this->google_recaptcha_token = $token;

        $this->submit();
    }

    public function submit()
    {
        $data = $this->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email:rfc',
                'message' => 'required',
                'google_recaptcha_token' => [
                    function ($attribute, $value, $fail) {
                        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('GOOGLE_RECAPTCHA_SECRET_KEY') . '&response=' . $value)->json();

                        if ($response['success'] && ($response['score'] < 0.9)) {
                            $fail($this->repo->error_recaptcha);
                        }
                    },
                ],
            ],
            [
                'name.required' => $this->repo->error_name,
                'phone.required' => $this->repo->error_phone,
                'email.required' => $this->repo->error_email_1,
                'email.email' => $this->repo->error_email_2,
                'message.required' => $this->repo->error_message,
            ],
        );

        try {
            $message = "{$this->repo->label_name}: {$data['name']}
{$this->repo->label_phone}: {$data['phone']}
{$this->repo->label_email}: {$data['email']}
{$this->repo->label_message}: {$data['message']}";

            foreach ($this->repo->recipients as $recipient) {
                Mail::raw($message, function ($mailable) use ($recipient) {
                    $mailable->to($recipient['email'][config('app.locale')], $recipient['name'][config('app.locale')])->subject($this->repo->title);
                });
            }

            $this->reset([
                'name',
                'phone',
                'email',
                'message',
                'google_recaptcha_token',
            ]);

            session()->flash('message_success', $this->repo->message_success);
        } catch (Exception $e) {
            Log::error($e);
            session()->flash('message_failure', $this->repo->message_failure);
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
