<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class Playlist
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request)
    {
        return new JsonResponse([]);
    }
}