<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pembeli;
use PHPMailer\PHPMailer\PHPMailer;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendEmail extends Controller
{
    public function SendEmail()
    {
        //Dapatkan nama & email
        $user = Pembeli::where('notif', 'belum')->first();

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Sesuaikan dengan penyedia email Anda
            $mail->SMTPAuth   = true;
            $mail->Username   = '[EMAIL KAMU]';
            $mail->Password   = '[PASS KAMU]';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587; // Sesuaikan dengan port SMTP yang sesuai
    
            //Recipients
            $mail->setFrom('[EMAIL KAMU]', '[NAMA WEB KAMU]');
            $mail->addAddress($user->email, $user->nama);
    
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Welcome to Our Application';
            $mail->Body = view('emailtemp')->with([
                'user' => $user,
                'nama' => $user->nama,
                'event' => $user->event,
                'trx' => $user->trx
            ])->render();
    
            $mail->send();
    
            //Update bagian notif transaksi agar tidak dikirim email lagi.
            Pembeli::where('id', $user->id)->update(['notif' => 'sudah']);
            return "Email terkirim & notif di set ke (sudah)";

        } catch (Exception $e) {
            dd($e->getMessage()); // Tambahkan ini untuk melihat pesan kesalahan
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



    }
}
