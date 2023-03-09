<?php

namespace App\Http\Resources;

use App\Models\Quiz;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Quiz
 */
class QuizResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'categories' => CategoryResource::collection($this->categories),
            'questions' => QuestionResource::collection($this->questions)
        ];
    }
}
