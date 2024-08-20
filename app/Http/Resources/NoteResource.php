<?php

namespace App\Http\Resources;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
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
            'book_id' => new BookResource(Book::find($this->book_id)),
            'user_id' => new AuthResource(User::find($this->user_id)),
            'page' => $this->page,
            'body' => $this->body
        ];
    }
}
