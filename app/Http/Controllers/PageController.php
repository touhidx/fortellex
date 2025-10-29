<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // In a real app, you would fetch these from your database
        $newArrivals = [
            (object)[
                'id' => 1,
                'name' => 'Elegant Evening Dress',
                'description' => 'A stunning piece for special occasions',
                'price' => 189.99,
                'image' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
            ],
            // Add more products...
        ];

        return view('frontend.home', compact('newArrivals'));
    }

    public function hotDeals()
    {
        // Sample data - replace with actual database queries
        $featuredDeals = [];
        $deals = [];

        return view('frontend.pages.hot-deals', compact('featuredDeals', 'deals'));
    }

    public function about()
    {
        $teamMembers = [
            (object)[
                'name' => 'Sarah Johnson',
                'position' => 'Founder & Creative Director',
                'bio' => 'With over 15 years in the fashion industry, Sarah leads our design team with passion and vision.',
                'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
            ],
            // Add more team members...
        ];

        return view('frontend.pages.about', compact('teamMembers'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}