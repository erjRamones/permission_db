<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'customer_id' => $this->customer_id,
        'prepared_at' => $this->prepared_at,
        'document_status_code' => $this->document_status_code,
        'prepared_by_id' => $this->prepared_by_id,
        'amount_paid' => $this->amount_paid,
        'notes' => $this->notes,
        ];
    }
}
