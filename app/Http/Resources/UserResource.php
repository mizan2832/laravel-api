<?php

namespace App\Http\Resources;

use App\Http\Resources\PostResource;

use Illuminate\Http\Resources\Json\JsonResource;
use Auth;
class UserResource extends JsonResource
{
    public $preserveKeys = true;
    public static $wrap = 'vehicle';


    
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' =>$this->email,
            // 'posts' => PostResource::collection($this->posts),
            'roles' => RoleResozurce::collection($this->roles),
            'roles' => RoleResource::collection($this->whenLoaded(roles)),
            'user_id' => $this->relationLoaded('roles') ? $this->roles->pluck('pivot.user_id')->unique()->join(' ') : null
            ,
            

        ];
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
