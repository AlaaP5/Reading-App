<?php

namespace App\Http\Resources;

use App\Models\Author;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'content' => asset('files/' . $this->content),
            'author_id' => new AuthorResource(Author::find($this->author_id)),
            'type_id' => new TypeResource(Type::find($this->type_id)),
            'status_id' => $this->status,
            'date_publication' => $this->date_publication,
            'description' => $this->description,
            'image' => asset('files/' . $this->image),
            'evaluation' => $this->evaluation,
            'price' => $this->price,
            'pages' => $this->pages,
        ];
    }
}
