<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * توجيه المستخدم بعد تسجيل الخروج بناءً على الـ Guard
     */
    public function toResponse($request)
    {
        // قراءة الـ Guard الحالي من الرابط (كما فعلنا في الـ Login)
        $guard = config('fortify.guard');

        // إذا كان تسجيل الخروج من لوحة الأدمن
        if ($guard === 'admin') {
            return redirect('/admin/login');
        }

        // إذا كان تسجيل الخروج من لوحة الموظف
        if ($guard === 'employee') {
            return redirect('/employee/login');
        }

        // التوجيه الافتراضي لباقي المستخدمين
        return redirect('/');
    }
}