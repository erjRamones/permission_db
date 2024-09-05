<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sss_no' => $this->sss_no,
            'phic_no' => $this->phic_no,
            'tin_no' => $this->tin_no,
            'date_hired' => $this->date_hired,
            'date_resigned' => $this->date_resigned,
            'personality_id' => $this->personality_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
