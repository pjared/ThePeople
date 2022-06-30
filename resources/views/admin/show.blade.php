<x-app-layout>
    <div class="grid grid-flow-row bg-gray-100 gap-4">
        @include('admin.admin-nav')

        <div class="grid grid-cols-3">
            <div class="col-span-1">
                <div class="grid grid-rows-2">
                    <div class="row-span-1">
                        <span>
                            Approve new candidates
                        </span>
                        <p>
                            This page will show you the most recent applicants for the site.
                        </p>
                    </div>
                    <div class="row-span-1">
                        <button class="btn btn-primary">
                            <a href="{{ route('approve_candidates') }}">Go to page</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
            </div>
            <div class="col-span-1">
            </div>
        </div>
    </div>
</x-app-layout>
