<!-- Hero Section -->
<section class="hero min-h-screen bg-base-200 px-4">
    <div class="hero-content text-center">
        <div class="max-w-2xl">
            <h1 class="text-5xl font-bold">Welcome to {{ $company->name }}</h1>
            <p class="py-2">{{ $company->address }}
            <p class="py-2">{{ $company->state }}
            <p class="py-2">{{ $company->phone }}
            <p class="py-2">{{ $company->postcode }}
            </p>
            <button class="btn btn-primary">{{ $company->country }}</button>
        </div>
    </div>
</section>
