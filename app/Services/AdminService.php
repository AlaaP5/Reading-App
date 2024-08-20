<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;


class AdminService
{
    public function home()
    {
        $booksCount = DB::table('books')->count();
        $authorsCount = DB::table('authors')->count();
        $categoriesCount = DB::table('categories')->count();
        $typesCount = DB::table('types')->count();

        $response = [
            'authors_count' => $authorsCount,
            'books_count' => $booksCount,
            'categories_count' => $categoriesCount,
            'types_count' => $typesCount,
        ];

        return response()->json(['data' => $response],200);
    }

    
}
