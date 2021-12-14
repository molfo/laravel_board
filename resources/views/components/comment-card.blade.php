@props(['comment' => $comment])

<div class="border-b-2 p-4">
    <!-- Well begun is half done. - Aristotle -->
    <span class="text-sm font-bold">{{ $comment->user->name }}</span>
    <span class="text-sm text-gray-600">{{ $comment->created_at->toDateTimeString() }}</span>

    <p>{{ $comment->body }}</p>
</div>