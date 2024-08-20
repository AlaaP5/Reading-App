<?php

namespace App\Services;

use App\Events\SendNotificationEvent;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\TypeResource;
use App\Models\Category;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Event;

class CategoryService
{
    public function store($request)
    {
        $input = $request->all();
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('categories', $image, 'files');
        $input['image'] = $path;
        Category::create($input);

        $users = User::where('Role_id', 2)->get();
        foreach ($users as $user) {
            if (!empty($user->fcm_token)) {
                Event::dispatch(new SendNotificationEvent('تم إضافة تصنيف جديد إلى التطبيق', $user));
            }
        }
        return response()->json(['message' => 'The Category is added Successfully'], 201);
    }


    public function fetchAll()
    {
        $category = Category::orderBy("name")->get();
        if (!count($category)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $categories = CategoryResource::collection($category);
        return response()->json(['data' => $categories], 200);
    }


    public function show($id)
    {
        $category = Category::find($id);
        if (empty($category)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $categories = new CategoryResource($category);
        return response()->json(['data' => $categories], 200);
    }


    public function search($name)
    {
        $search = Category::where('name', 'like', '%' . $name . '%')->orderBy("name")->get();
        if (!count($search)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $categories = CategoryResource::collection($search);
        return response()->json(['data' => $categories], 200);
    }


    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if (empty($category)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $type = Type::where('category_id', $id)->first();
        if (!empty($type)) {
            return response()->json(['message' => 'you can not delete this category'], 403);
        }
        $category->delete();
        return response()->json(['Category deleted successfully'], 200);
    }


    public function TypesOfCategory($id)
    {
        $type = Type::where('category_id', $id)->get();
        if (!count($type)) {
            return response()->json(['message' => 'not found'], 404);
        }
        $types = TypeResource::collection($type);
        return response()->json(['data' => $types], 200);
    }
}
