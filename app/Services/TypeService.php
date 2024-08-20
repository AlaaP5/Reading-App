<?php

namespace App\Services;

use App\Http\Resources\TypeResource;
use App\Models\Book;
use App\Models\Type;


class TypeService
{
    public function store($request)
    {
        $input = $request->all();
        Type::create($input);
        return response()->json(['message' => 'The Type is added Successfully'], 201);
    }


    public function fetchAll()
    {
        $type = Type::orderBy("name")->get();
        if (!count($type)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $types = TypeResource::collection($type);
        return response()->json(['data' => $types], 200);
    }


    public function show($id)
    {
        $type = Type::find($id);
        if(empty($type)){
            return response()->json(['message' => 'not found'],404);
        }
        $types= new TypeResource($type);
        return response()->json(['data' => $types],200);
    }


    public function search($name)
    {
        $search = Type::where('name', 'like', '%' . $name . '%')->orderBy("name")->get();
        if (!count($search)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $types = TypeResource::collection($search);
        return response()->json(['data' => $types], 200);
    }


    public function deleteType($id)
    {
        $type = Type::find($id);
        if (empty($type)) {
            return response()->json(['message' => 'this Type not found'], 404);
        }
        $book = Book::where('type_id', $id)->first();
        if (!empty($book)) {
            return response()->json(['you can not delete this Type'], 403);
        }
        $type->delete();
        return response()->json(['type deleted successfully'], 200);
    }


    public function BooksOfType($id)
    {
        $books = Book::where('type_id', $id)->get();
        if (!count($books)) {
            return response()->json(['message' => 'not found'], 404);
        }
        foreach ($books as $book) {
            $book->image = asset('files/' . $book->image);
            $book->LastName = asset('files/' . $book->LastName);
        }
        return response()->json(['data' => $books], 200);
    }
}
