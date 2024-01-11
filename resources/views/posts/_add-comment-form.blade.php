@auth
<form action="/posts/{{ $post->slug }}/comments" method="post" class="border border-gray-200 p-6 rounded-xl">
    @csrf
    <header class="flex items-center">
        <img src="https://i.pravatar.cc/40" alt="" width="40" height="40" class="rounded-full">
        <h2 class="ml-4">Want to Participate?</h2>
    </header>
    <div class="mt-6">
        <textarea name="body" rows="5" class="w-full text-sm focus:outline-none focus:ring" placeholder="Quick, thing of say something" required></textarea>
        @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
        <x-submit-button>Post</x-submit-button>
    </div>
</form>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> or
    <a href="/login" class="hover:underline">Log In</a> to leave a comment.
</p>

@endauth