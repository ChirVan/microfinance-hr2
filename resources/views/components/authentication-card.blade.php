<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-background">
    <div class="mb-8">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-4 px-8 py-8 bg-white shadow-lg overflow-hidden sm:rounded-lg border-t-4 border-primary">
        {{ $slot }}
    </div>
</div>
