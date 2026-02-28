<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreRequest;
use App\Models\Question;
use Illuminate\Contracts\Auth\Guard;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        /** @var Guard $auth */
        $auth = auth();

        Question::create([
            'user_id'  => $auth->id(),
            'question' => $request->question,
        ]);
    }
}
