<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    public function send(string $phone, string $message): bool
    {
        try {
            $normalized = $this->normalizePhone($phone);

            $response = Http::withHeaders([
                'X-Api-Key' => config('services.whatsapp.api_key'),
            ])->post(config('services.whatsapp.endpoint'), [
                'number'  => $normalized,
                'message' => $message,
            ]);

            Log::info('WhatsApp send', [
                'phone'    => $normalized,
                'endpoint' => config('services.whatsapp.endpoint'),
                'status'   => $response->status(),
                'body'     => $response->body(),
            ]);

            if (! $response->successful()) {
                Log::warning('WhatsApp send failed', [
                    'phone'  => $normalized,
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
            }

            return $response->successful();
        } catch (\Throwable $e) {
            Log::error('WhatsApp service error: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Normalisasi nomor: 08xx → 628xx
     */
    protected function normalizePhone(string $phone): string
    {
        $phone = preg_replace('/\D/', '', $phone);

        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        if (! str_starts_with($phone, '62')) {
            $phone = '62' . $phone;
        }

        return $phone;
    }
}
