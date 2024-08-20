<?php

namespace App\Services;

use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Models\Book;

class AuthorService
{
    public function store($request)
    {
        $input = $request->all();

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('authors', $image, 'files');
        $input['image'] = $path;

        Author::create($input);
        return response()->json(['message' => 'The author is added Successfully'], 201);
    }


    public function fetch()
    {
        $author = Author::get();
        if (!count($author)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $authors= AuthorResource::collection($author);
        return response()->json(['data' => $authors], 200);
    }


    public function getAuthor($id)
    {
        $author = Author::where('id', $id)->first();
        if (empty($author)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $authors= new AuthorResource($author);
        return response()->json(['data' => $authors], 200);
    }


    public function search($name)
    {
        $search = Author::where('name', 'like', '%' . $name . '%')->get();
        if (!count($search)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $authors= AuthorResource::collection($search);
        return response()->json(['data' => $authors], 200);
    }


    public function deleteAuthor($id)
    {
        $author = Author::find($id);
        if (empty($author)) {
            return response()->json(['message' => 'this author is not found'], 404);
        }
        $book = Book::where('author_id', $id)->first();
        if (!empty($book)) {
            return response()->json(['message' => 'you can not delete this author'], 403);
        }
        $author->delete();
        return response()->json(['message' => 'author deleted successfully'], 200);
    }


    public function BooksOfAuthor($id)
    {
        $books = Author::where('id', $id)->with('books')->get();
        if (!count($books)) {
            return response()->json(['message' => 'Not Found'], 404);
        } else {
            foreach ($books as $book) {
                $book->image = asset('files/' . $book->image);
                $book->content = asset('files/' . $book->content);
            }
            return response()->json(['data' => $books], 200);
        }
    }
}
