<?php

namespace App\Presentation;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class PlaylistPresentation
{
    private $title;

    public static function fromHttpRequest(Request $request): PlaylistPresentation
    {
        $playlist = $request->get('playlist');

        if (empty($playlist)) {
            throw new \InvalidArgumentException();
        }

        if (!is_array($playlist)) {
            throw new \InvalidArgumentException();
        }

        if (!array_key_exists('title', $playlist)) {
            throw new \InvalidArgumentException();
        }

        if (empty($playlist['title'])) {
            throw new \InvalidArgumentException();
        }

        $self = new self();
        $self->title = $playlist['title'];

        return $self;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
