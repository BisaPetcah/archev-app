<div x-data="{ open: false }">
    <!-- Button -->
    <button x-on:click="open = true" type="button">
        {{ $trigger }}
    </button>

    <!-- Modal -->
    <div x-show="open" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true"
        x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto">
        <!-- Overlay -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

        <!-- Panel -->
        <div x-show="open" x-transition x-on:click="open = false"
            class="relative min-h-screen flex items-center justify-center p-4">
            <div x-on:click.stop x-trap.noscroll.inert="open"
                class="relative max-w-2xl w-full bg-white border border-black p-8 overflow-y-auto">
                <!-- Title -->
                <h2 class="text-3xl font-medium" :id="$id('modal-title')">{{ $title ?? 'Konfirmasi' }}</h2>
                <!-- Content -->
                {{ $text }}
                <!-- Buttons -->
                <div class="mt-8 flex space-x-2">
                    <div type="button" x-on:click="open = false"
                        class="bg-white border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
                        {{ $action }}
                    </div>
                    <button type="button" x-on:click="open = false"
                        class="bg-white border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
