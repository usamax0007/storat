<x-filament-widgets::widget>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:grid-rows-3">
        {{-- Customers --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Total Customers</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\User::where('role','customer')->count() }}
                </p>
                <p class="dashboard-stat-description">Registered clients</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-user-group />
            </div>
        </div>

        {{-- Properties --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Active Properties</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\Property::count() }}
                </p>
                <p class="dashboard-stat-description">Currently live on site</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-home-modern />
            </div>
        </div>

        {{-- Contacts --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Pending Contacts</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\Contact::count() }}
                </p>
                <p class="dashboard-stat-description">Awaiting follow-up</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-phone />
            </div>
        </div>

        {{-- Plans --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Subscription Plans</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\PropertyPlan::count() }}
                </p>
                <p class="dashboard-stat-description">Available packages</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-credit-card />
            </div>
        </div>

        {{-- Categories --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Total Categories</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\PropertyCategory::count() }}
                </p>
                <p class="dashboard-stat-description">Available Categories</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-tag />
            </div>
        </div>

        {{-- Partners --}}
        <div class="dashboard-stat">
            <div>
                <p class="dashboard-stat-title">Total Partners</p>
                <p class="dashboard-stat-value">
                    {{ \App\Models\Partner::count() }}
                </p>
                <p class="dashboard-stat-description">Registered Partners</p>
            </div>
            <div class="dashboard-stat-icon">
                <x-heroicon-o-users />
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
