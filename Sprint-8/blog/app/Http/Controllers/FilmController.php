<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        if (!$films) {
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }
        return $this->sendResponse('success', 'Congratulions', $films, 200);
    }

    public function store(Request $request, Film $films)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());
        }

        $films->title = $request->title;
        $films->description = $request->description;
        $films->author = $request->author;
        $films->publisher = $request->publisher;
        $films->year = $request->year;

        try {
            $films->save();
            $films = Film::all();
            return $this->sendResponse('success', 'berhasil', $films, 200);
        } catch (\Throwable $th) {
            return $this->sendResponse('errpr', 'Gagal', NULL, 500);

        }
    }

    public function show($id)
    {
        $film = Film::find($id);

        if (!$film) {
            return $this->sendResponse('error', 'gagal diambil', NULL, 400);
        }
        return $this->sendResponse('success', 'berhasil diambil', $film, 200);
    }

    public function destroy($id)
    {
        $film = Film::find($id);

        if ($film) {
            $film->delete();
            return $this->sendResponse('success', 'berhasil dihapus', NULL, 200);
        }
        return $this->sendResponse('error', 'gagal dihapus', NULL, 500);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());
        }


        $film = Film::find($id);

        if (!$film) {
            return $this->sendResponse('error', 'gagal diupdate ', NULL, 400);
        }

        $film->title = $request->title;
        $film->description = $request->description;
        $film->author = $request->author;
        $film->publisher = $request->publisher;
        $film->year = $request->year;

        $film->save();

        $film = Film::all();

        return $this->sendResponse('success', 'berhasil diupdate', $film, 200);
    }

}
