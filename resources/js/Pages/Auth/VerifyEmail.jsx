import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/react';

export default function VerifyEmail() {
    return (
        <GuestLayout>
            <Head title="Email Verification" />
            <div className="mb-4 text-sm text-gray-600 dark:text-gray-400">
                Email verification is no longer required. You can now log in.
            </div>
        </GuestLayout>
    );
}
