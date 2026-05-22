<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * توجيه المستخدم بناءً على الـ Guard الذي تم استخدامه في مسار تسجيل الدخول
     */
    public function toResponse($request)
    {
        // قراءة الـ Guard الذي تم تحديده ديناميكياً بناءً على الرابط
        $guard = config('fortify.guard');

        // إذا كان مسار الدخول للأدمن
        if ($guard === 'admin') {
            return redirect()->intended('/admin/dashboard'); // توجيه المسؤول إلى لوحة التحكم الخاصة به
        }

        // إذا كان مسار الدخول للموظف
        if ($guard === 'employee') {
            return redirect()->intended('/employee/dashboard');
        }

        // التوجيه الافتراضي لباقي المستخدمين (اللاعبين مثلاً أو الـ web العادي)
        return redirect()->intended('/dashboard');
    }
}