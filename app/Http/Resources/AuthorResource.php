<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'birthDay' => $this->birthDay,
            'image' => asset('files/' . $this->image),
            'country' => $this->country,
            'languish' => $this->languish,
            'education' => $this->education,
            'About_author' => $this->about_author,
        ];
    }
}
