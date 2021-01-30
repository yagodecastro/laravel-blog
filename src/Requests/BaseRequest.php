<?php

namespace HessamCMS\Requests;

use Illuminate\Foundation\Http\FormRequest;
use HessamCMS\Interfaces\BaseRequestInterface;

/**
 * Class BaseRequest
 * @package HessamCMS\Requests
 */
abstract class BaseRequest extends FormRequest implements BaseRequestInterface
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('admin')->check() && auth()->guard('admin')->user()->canManageHessamCMSPosts();
    }
}
