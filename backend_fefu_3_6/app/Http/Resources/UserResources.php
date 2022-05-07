<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'github_logged_in_at' => $this->github_logged_in_at,
            'github_registered_at' => $this->github_registered_at,
            'vk_logged_in_at' => $this->vk_logged_in_at,
            'vk_registered_at' => $this->vk_registered_at,
            'google_logged_in_at' => $this->google_logged_in_at,
            'google_registered_at' => $this->google_registered_at,
        ];
    }
}
