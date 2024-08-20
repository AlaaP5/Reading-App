<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'image' => asset('files/' . $this->image),
            'birthDay' => $this->birthDay,
            'evaluation' => $this->evaluation,
            'role_id' => [
                'id' => $this->role->id,
                'name' => $this->role->name
            ],
        ];
    }
}
