<?php

namespace App\Services;

use App\Events\SendNotificationEvent;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Event;

class BookService
{
    public function store($request)
    {
        $input = $request->all();

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $image, 'files');
        $input['image'] = $path;

        $content = $request->file('content')->getClientOriginalName();
        $pathBook = $request->file('content')->storeAs('books', $content, 'files');
        $input['content'] = $pathBook;

        Book::create($input);
        $users = User::where('Role_id', 2)->get();
        foreach ($users as $user) {
            if (!empty($user->fcm_token)) {
                Event::dispatch(new SendNotificationEvent('تم إضافة كتاب جديد إلى التطبيق', $user));
            }
        }
        return response()->json(['message' => 'The book is added Successfully'], 201);
    }


    public function fetch()
    {
        $book = Book::get();
        if (!count($book)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $books = BookResource::collection($book);
        return response()->json(['data' => $books], 200);
    }


    public function getBook($id)
    {
        $book = Book::find($id);
        if (empty($book)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $books = new BookResource($book);
        return response()->json(['data' => $books], 200);
    }


    public function search($name)
    {
        $search = Book::where('name', 'like', '%' . $name . '%')->orderBy("name")->get();
        if (!count($search)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $books = BookResource::collection($search);
        return response()->json(['data' => $books], 200);
    }


    public function update($id, $request)
    {
        $book = Book::find($id);
        if ($request->content) {
            $content = $request->file('content')->getClientOriginalName();
            $pathBook = $request->file('content')->storeAs('books', $content, 'files');
        }

        if ($request->image) {
            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $image, 'files');
        }
        $book->update([
            'name' => ($request->name) ? $request->name : $book->name,
            'author_id' => ($request->author_id) ? $request->author_id : $book->author_id,
            'type_id' => ($request->type_id) ? $request->type_id : $book->type_id,
            'description' => ($request->description) ? $request->description : $book->description,
            'status_id' => ($request->status_id) ? $request->status_id : $book->status_id,
            'content' => ($request->content) ? $pathBook : $book->content,
            'image' => ($request->image) ? $path : $book->image,
            'date_publication' => ($request->date_publication) ? $request->date_publication : $book->date_publication,
            'price' => ($request->price) ? $request->price : $book->price,
            'pages' => ($request->pages) ? $request->pages : $book->pages
        ]);
        return response()->json(['message' => 'Book updated successfully'], 200);
    }


    public function deleteBook($id)
    {
        $book = Book::find($id);
        if (empty($book)) {
            return response()->json(['message' => 'this book not found'], 404);
        }
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
}
