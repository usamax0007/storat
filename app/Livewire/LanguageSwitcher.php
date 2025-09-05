<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $currentLocale;

    public function mount()
    {
        $this->currentLocale = App::getLocale();
    }

    public function switchLanguage($locale)
    {
        // Validate locale
        if (!in_array($locale, ['ar', 'en'])) {
            return;
        }

        // Set session and application locale
        Session::put('locale', $locale);
        App::setLocale($locale);
        config(['app.locale' => $locale]);
        $this->currentLocale = $locale;

        // Log the locale change for debugging
        \Log::info('Language switched to: ' . $locale);

        // Dispatch event to reload the page
        $this->dispatch('language-changed');
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
