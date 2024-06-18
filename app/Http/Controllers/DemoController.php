<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoRequest;
use App\Models\DemoRequest as DemoRequestModel;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    public function store(DemoRequest $request)
    {
        // Сохранить в базу данных
        $demoRequest = DemoRequestModel::create($request->all());

        // Отправить в Telegram
        $this->sendToTelegram($demoRequest);

        // Отправить на почту
        $this->sendToEmail($demoRequest);

        return back()->with('success', 'Запрос успешно отправлен!');
    }

    protected function sendToTelegram($demoRequest)
    {
        $message = "Новый запрос на демо от: {$demoRequest->first_name} {$demoRequest->last_name}\n";
        $message .= "Email: {$demoRequest->email}\n";
        $message .= "Телефон: {$demoRequest->country_code} {$demoRequest->phone}\n";
        $message .= "Должность: {$demoRequest->position}\n";
        $message .= "Компания: {$demoRequest->company}\n";
        $message .= "Количество сотрудников: {$demoRequest->employee_count}";

        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $telegramChatId = env('TELEGRAM_CHAT_ID');

        file_get_contents("https://api.telegram.org/bot{$telegramToken}/sendMessage?chat_id={$telegramChatId}&text=" . urlencode($message));
    }

    protected function sendToEmail($demoRequest)
    {
        $data = [
            'first_name' => $demoRequest->first_name,
            'last_name' => $demoRequest->last_name,
            'email' => $demoRequest->email,
            'phone' => $demoRequest->phone,
            'position' => $demoRequest->position,
            'company' => $demoRequest->company,
            'employee_count' => $demoRequest->employee_count,
        ];

        Mail::send('emails.demo_request', $data, function ($message) use ($demoRequest) {
            $message->to($demoRequest->email, 'Recipient Name')
                    ->subject('Новый запрос на демо')
                    ->from(config('mail.from.address'), config('mail.from.name')); // Используйте адрес из конфигурации
        });
    }
}
