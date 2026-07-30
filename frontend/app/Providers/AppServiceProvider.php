<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Homepage;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $homepage = Homepage::firstOrFail();
            $setting = Setting::firstOrFail();

            $data = (object) array_merge(
                $homepage->toArray(),
                $setting->toArray(),
            );

            $services = Service::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('title')
                ->get();

            $faqs = Faq::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            $testimonials = Testimonial::query()
                ->where('is_active', true)
                ->where('is_featured', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            $galleries = Gallery::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            $view->with(compact(
                'data',
                'services',
                'faqs',
                'testimonials',
                'galleries'
            ));
        });

    }
}
