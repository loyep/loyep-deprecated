<?php


if ( !function_exists('getAvatar') ) {
    function getAvatar($email = '', $size = 512)
    {
        return 'https://secure.gravatar.com/avatar/' . md5($email) . '?size=' . $size;
    }
}