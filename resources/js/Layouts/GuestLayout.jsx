import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

import Navbar from '@/Components/Navbar';
import Hero from '@/Components/home/Hero';

export default function Guest({ children }) {
    return (
        <div className="">
            <Navbar />
            <Hero backgroundOnly />
                

            <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mx-auto">
                {children}
            </div>
        </div>
    );
}
