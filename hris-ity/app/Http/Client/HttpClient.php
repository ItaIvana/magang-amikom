<?php

namespace App\Http\Client;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HttpClient
{
    public static function getAPIToken()
    {
        $apiToken = Auth::user()->api_token;
        return "Bearer $apiToken";
    }

    public static function get($uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $request = Request::create($uri, 'GET', $parameters,  $cookies, $files, $server, $content);
        $request->headers->set('Authorization', HttpClient::getAPIToken());
        $response = Route::dispatch($request);
        return $response;
    }

    public static function post($uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $request = Request::create($uri, 'POST', $parameters, $cookies, $files, $server, $content);
        $request->headers->set('Authorization', HttpClient::getAPIToken());
        $response = Route::dispatch($request);
        return $response;
    }

    public static function put($uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $request = Request::create($uri, 'PUT', $parameters, $cookies, $files, $server, $content);
        $request->headers->set('Authorization', HttpClient::getAPIToken());
        $response = Route::dispatch($request);
        return $response;
    }

    public static function delete($uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $request = Request::create($uri, 'DELETE', $parameters, $cookies, $files, $server, $content);
        $request->headers->set('Authorization', HttpClient::getAPIToken());
        $response = Route::dispatch($request);
        return $response;
    }
}
